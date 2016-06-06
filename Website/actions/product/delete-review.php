<?php
	include_once('../../config/init.php');
	include_once('../add-to-log.php');
	include_once($BASE_DIR .'database/reviews.php');

	if (!isset($_SESSION['email']) && !isset($_SESSION['admin'])) {
		$_SESSION['error_messages'] = 'You have to login before deleting a review.';
		header("Location: $BASE_URL" . 'pages/users/sign/');
		exit;
	}

	if (preg_match('/^[0-9]*$/', $_GET['id']))
		$id = $_GET['id'];
	else {
		$_SESSION['error_messages'] = "Couldn't delete review.";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}

	try {
		deleteReview($id);
	} catch (PDOException $e) {
		sendToLog("delete_review_" . $id, $e->getMessage());
		$_SESSION['error_messages'] = "Couldn't delete review.";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}

	$_SESSION['success_messages'] = 'Review deleted.';  
	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>