<?php
	include_once('../../../config/init.php');
	include_once($BASE_DIR .'pages/common/header.php');
	include_once($BASE_DIR .'database/purchases.php');
	include_once($BASE_DIR .'database/movies.php');

	if (!isset($_SESSION['email']))
		header("Location: $BASE_URL");

	if (!isset($_GET['page']) || $_GET['page'] == "")
		$currentPage = 1;
	else if (preg_match('/^[0-9]+$/', $_GET['page']))
		$currentPage = $_GET['page'];

	$numberOfOrders = getTotalOrders($_SESSION['email']);
	$lastPage = ceil($numberOfOrders['count']/5);

	if ($currentPage > $lastPage)
		$currentPage = $lastPage;
	
	$offset = $currentPage * 5 - 5;
	if ($offset < 0)
		$offset = 0;
	$orders = getOrders($_SESSION['email'], $offset);
	foreach($orders as $orderKey => $order) {
		foreach($orders[$orderKey]['movies'] as $key => $movie) {
			$movieDirectors = getMovieDirectors($movie['movieid']);
			$orders[$orderKey]['movies'][$key]['directors'] = $movieDirectors;
		}
	}

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
	$smarty->assign('orders', $orders);
	$smarty->display('users/all-orders.tpl');
?>