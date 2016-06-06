<?php
	include_once('../../../config/init.php');
	include_once($BASE_DIR .'pages/common/header.php');
	include_once($BASE_DIR .'database/movies.php');
	include_once($BASE_DIR .'database/reviews.php');
	include_once($BASE_DIR .'database/users.php');

	if (!isset($_SESSION['email'])) {
		header("Location: $BASE_URL");
		exit;
	}

	if (!isset($_GET['page']) || $_GET['page'] == "")
		$currentPage = 1;
	else if (preg_match('/^[0-9]+$/', $_GET['page']))
		$currentPage = $_GET['page'];

	$userID = getUserIDByEmail($_SESSION['email']);

	$totalReviews = getTotalUserReviews($userID['memberid']);
	$lastPage = ceil($totalReviews/10);

	if ($currentPage > $lastPage)
		$currentPage = $lastPage;
	
	$offset = $currentPage * 10 - 10;
	if ($offset < 0)
		$offset = 0;
	$reviews = getUserReviews($userID['memberid'], $offset);

	if ($currentPage > 3) {
		$fromPage = $currentPage - 2;
		if ($lastPage > 5) {
			if ($currentPage + 2 < $lastPage)
				$toPage = $currentPage + 2;
			else
				$toPage = $lastPage;
		}
		else
			$toPage = $lastPage;
	}
	else {
		$fromPage = 1;
		if ($lastPage > 5)
			$toPage = 5;
		else
			$toPage = $lastPage;
	}

	$nextPage = $currentPage + 1;
	$previousPage = $currentPage - 1;

	$smarty->assign('nextPage', $nextPage);
	$smarty->assign('previousPage', $previousPage);
	$smarty->assign('lastPage', $lastPage);
	$smarty->assign('fromPage', $fromPage);
	$smarty->assign('toPage', $toPage);
	$smarty->assign('currentPage', $currentPage);
	$smarty->assign('totalReviews', $totalReviews);
	$smarty->assign('reviews', $reviews);
	$smarty->display('users/reviews.tpl');

?>