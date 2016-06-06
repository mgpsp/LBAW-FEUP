<?php
  	include_once('../../config/init.php');
    include_once('../add-to-log.php');
  	include_once($BASE_DIR .'database/carousel.php');

  	if (!isset($_SESSION['admin'])) {
		$_SESSION['error_messages'] = 'You have to login before adding a movie to the carousel.';
		header("Location: $BASE_URL" . 'pages/users/sign.php');
	}

	$movieid = $_POST['movieid'];

	$uploads_dir = "../../images";
	$image_name = uniqid() . "-" . $_FILES["image"]["name"];
	$tmp_name = $_FILES["image"]["tmp_name"];
    $return = move_uploaded_file($tmp_name, "$uploads_dir/$image_name");
    $imagePath = "images/" . $image_name;

    try {
    	addMovieToCarousel($movieid, $imagePath);
    } catch (PDOException $e) {
    	sendToLog("add_carousel", $e->getMessage());
		$_SESSION['error_messages'] = 'Movie wasn\'t added to carousel.';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
    }
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
 ?>