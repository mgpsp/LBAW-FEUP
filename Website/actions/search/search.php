<?php
	include_once('../../config/init.php');
	include_once('../add-to-log.php');
	include_once($BASE_DIR .'database/movies.php');

	$text = $_POST['searchText'];
	try {
		$_SESSION['searchResults'] = searchMovie($text);
	} catch (PDOException $e) {
		sendToLog("search", $e->getMessage());
		$_SESSION['error_messages'] = "Error in search.";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	
	header('Location: ' . $BASE_URL . 'pages/search/');
?>