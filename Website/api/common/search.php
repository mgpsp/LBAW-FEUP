<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/movies.php');

	if (isset($_GET['text']))
	    $text = $_GET['text'];
	else
	 exit;
	
	try {
		$movies = searchMovie($text);
	    echo json_encode($movies);
	} catch (PDOException $e) {
	    echo json_encode('error');
	    var_dump($e->getMessage());
	}
	
?>