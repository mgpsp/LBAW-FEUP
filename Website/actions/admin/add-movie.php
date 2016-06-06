<?php
  	include_once('../../config/init.php');
  	include_once('../add-to-log.php');
	include_once($BASE_DIR .'database/movies.php');
	include_once($BASE_DIR .'database/person.php');
	include_once($BASE_DIR .'database/language.php');

	if (!isset($_SESSION['admin'])) {
		$_SESSION['error_messages'] = 'You have to login before adding a movie.';
		header("Location: $BASE_URL" . 'pages/users/sign.php');
	}

	$name = $_POST['name'];
	$date = $_POST['date'];
	$synopsis = $_POST['synopsis'];
	$discs = $_POST['discs'];
	$price = (float) $_POST['price'];
	$region = $_POST['region'];
	$classification = $_POST['classification'];
	$runtime = (int) $_POST['runtime'];
	$stock = $_POST['stock'];
	$trailer = $_POST['trailer'];
	$format = $_POST['format'];
	$genre = $_POST['genre'];
	$studio = $_POST['studio'];
	$language = $_POST['language'];
	$director = $_POST['director'];
	$actor = $_POST['actor'];
	$sub = $_POST['sub'];
	$hisub = $_POST['hisub'];

	$uploads_dir = "../../images";
	$image_name = uniqid() . "-" . $_FILES["cover"]["name"];
	$tmp_name = $_FILES["cover"]["tmp_name"];
    $return = move_uploaded_file($tmp_name, "$uploads_dir/$image_name");
    $imagePath = "images/" . $image_name;

    try {
    	$movieid = addMovie($classification, $synopsis, $imagePath, $name, $discs, $price, $region, $date, $runtime, $stock, $format, $studio, $genre, $language, $trailer);
    } catch (PDOException $e) {
    	sendToLog("add_movie", $e->getMessage());
    	$_SESSION['error_messages'] = 'Movie wasn\'t added.';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
    }

    $directors = preg_split("/[,]+[ ]*/", $director);
    foreach($directors as $director) {
    	try {
    		$personid = getPersonByName(trim($director));
    		addDirectorToMovie($movieid['movieid'], $personid['personid']);
    	} catch (PDOException $e) {
	    	sendToLog("add_movie", $e->getMessage());
	    	$_SESSION['error_messages'] = 'Director wasn\'t added.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
    	}
    	
    }

    if ($actor != "") {
    	$actors = preg_split("/[,]+[ ]*/", $actor);
    	foreach($actors as $actor) {
    		try {
		    	$personid = getPersonByName(trim($actor));
		    	addActorToMovie($movieid['movieid'], $personid['personid']);
	    	} catch (PDOException $e) {
		    	sendToLog("add_movie", $e->getMessage());
		    	$_SESSION['error_messages'] = 'Actor wasn\'t added.';
				header('Location: ' . $_SERVER['HTTP_REFERER']);
				exit;
	    	}
	    }
    }
    	
    if ($sub != "") {
    	$subs = preg_split("/[,]+[ ]*/", $sub);
    	foreach($subs as $sub) {
    		try {
    			$languageid = getLanguageByName(trim($sub));
	    		addSubtitleToMovie($movieid['movieid'], $languageid['languageid']);
    		} catch (PDOException $e) {
		    	sendToLog("add_movie", $e->getMessage());
		    	$_SESSION['error_messages'] = 'Subtitle wasn\'t added.';
				header('Location: ' . $_SERVER['HTTP_REFERER']);
				exit;
	    	}
	    }
    }
   		
   	if ($hisub != "") {
   		$hisubs = preg_split("/[,]+[ ]*/", $hisub);
   		foreach($hisubs as $hisub) {
   			try {
   				$languageid = getLanguageByName(trim($hisub));
	    		addHISubtitleToMovie($movieid['movieid'], $languageid['languageid']);
   			} catch (PDOException $e) {
		    	sendToLog("add_movie", $e->getMessage());
		    	$_SESSION['error_messages'] = 'HI subtitle wasn\'t added.';
				header('Location: ' . $_SERVER['HTTP_REFERER']);
				exit;
	    	}
	    }
   	}

	header('Location: ' . $BASE_URL . 'pages/product/?id=' . $movieid['movieid']);
?>