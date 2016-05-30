<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/movies.php');
	include_once($BASE_DIR .'database/reviews.php');

	if (isset($_GET['id']) && preg_match('/^[0-9]*$/', $_GET['id']))
		$id = $_GET['id'];
	else
		header("Location: $BASE_URL");

	$movieinfo = getMovieInfo($id);
	$moviedirectors = getMovieDirectors($id);
	$movieactors = getMovieActors($id);
	$moviesubs = getMovieSubtitles($id);
	$moviehisubs = getMovieHISubtitles($id);

	$reviews = getMovieReviews($id, 0);
	$totalReviews = getTotalReviews($id);

	$averagescore = round($movieinfo["averagescore"], 1);
	$moviescore = floor($movieinfo["averagescore"]);
	$fraction = $movieinfo["averagescore"] - $moviescore;
	if ($fraction < 0.4)
		$rest = 5 - $moviescore;
	else
		$rest = 5 - $moviescore - 1;

	$smarty->assign('totalReviews', $totalReviews);
	$smarty->assign('movieinfo', $movieinfo);
	$smarty->assign('averagescore', $averagescore);
	$smarty->assign('moviescore', $moviescore);
	$smarty->assign('fraction', $fraction);
	$smarty->assign('rest', $rest);
	$smarty->assign('moviedirectors', $moviedirectors);
	$smarty->assign('movieactors', $movieactors);
	$smarty->assign('moviesubs', $moviesubs);
	$smarty->assign('moviehisubs', $moviehisubs);
	$smarty->assign('reviews', $reviews);
	$smarty->display('product/product.tpl');
?>