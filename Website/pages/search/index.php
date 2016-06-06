<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'pages/common/header.php');

	if (isset($_SESSION['searchResults']))
		$searchResults = $_SESSION['searchResults'];
	else
		header("Location: $BASE_URL");

	unset($_SESSION['searchResults']);

	if (count($searchResults) > 24) {
		if (!isset($_GET['page']) || $_GET['page'] == "")
			$currentPage = 1;
		else if (preg_match('/^[0-9]+$/', $_GET['page']))
			$currentPage = $_GET['page'];

		$lastPage = ceil(count($searchResults)/24);

		if ($currentPage > $lastPage)
			$currentPage = $lastPage;
		
		$fromResult = $currentPage * 24 - 24;
		$toResult = $fromResult + 24;

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
	}
	else {
		$fromResult = 0;
		$toResult = count($searchResults) - 1;
	}

	$smarty->assign('nextPage', $nextPage);
	$smarty->assign('previousPage', $previousPage);
	$smarty->assign('lastPage', $lastPage);
	$smarty->assign('fromPage', $fromPage);
	$smarty->assign('toPage', $toPage);
	$smarty->assign('currentPage', $currentPage);
	$smarty->assign('fromResult', $fromResult);
	$smarty->assign('toResult', $toResult);
	$smarty->assign('searchResults', $searchResults);
	$smarty->display('search/search.tpl');

?>