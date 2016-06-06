<?php
  	include_once('../../config/init.php');
  	include_once('../add-to-log.php');
	include_once($BASE_DIR .'database/reviews.php');
	include_once($BASE_DIR .'database/users.php');

	if (!isset($_SESSION['email'])) {
		$_SESSION['error_messages'] = 'You have to login before reviewing a product.';
		header("Location: $BASE_URL" . 'pages/users/sign/');
		exit;
	}

	$title = strip_tags($_POST['title']);
	$review = strip_tags($_POST['review']);
	$rating = (int)$_POST['rating'];
	$userid = getUserIDByEmail($_SESSION['email']);
	$movieid = (int)$_POST['movieid'];

	try {
		addReview($userid['memberid'], $rating, $title, $review, $movieid);
	} catch (PDOException $e) {
		sendToLog("add_review", $e->getMessage());
		$_SESSION['error_messages'] = 'Review wasn\'t added.';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	$_SESSION['success_messages'] = 'Review added.';  
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>