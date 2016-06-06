<?php
  	include_once('../../config/init.php');
  	include_once('../add-to-log.php');
	include_once($BASE_DIR .'database/reviews.php');
	include_once($BASE_DIR .'database/users.php');

	if (!isset($_SESSION['email']) && !isset($_SESSION['admin'])) {
		$_SESSION['error_messages'] = 'You have to login before reviewing a product.';
		header("Location: $BASE_URL" . 'pages/users/sign/');
		exit;
	}

	$title = strip_tags($_POST['title']);
	$review = trim(strip_tags($_POST['review']));
	$rating = (int)$_POST['rating'];
	$reviewid = (int)$_POST['reviewid'];

	try {
		editReview($rating, $title, $review, $reviewid);
	} catch (PDOException $e) {
		sendToLog("edit_review_" . $reviewid, $e->getMessage());
		$_SESSION['error_messages'] = "Couldn't edit review.";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}

	$_SESSION['success_messages'] = 'Review edited.';  
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>