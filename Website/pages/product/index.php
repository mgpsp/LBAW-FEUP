<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'pages/common/header.php');
	include_once($BASE_DIR .'database/movies.php');
	include_once($BASE_DIR .'database/reviews.php');
	include_once($BASE_DIR .'database/genre.php');
	include_once($BASE_DIR .'database/format.php');
	include_once($BASE_DIR .'database/language.php');
	include_once($BASE_DIR .'database/studio.php');
	include_once($BASE_DIR .'database/wishlist.php');

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

	$genres = getGenres();
	$formats = getFormats();
	$languages = getLanguages();
	$studios = getStudios();

	$userID = getUserIDByEmail($_SESSION['email']);

	$inWishlist = isMovieInWishlist($userID['memberid'], $movieinfo['movieid']);
	
	$smarty->assign('inWishlist', $inWishlist);
	$smarty->assign('userID', $userID['memberid']);
	$smarty->assign('genres', $genres);
	$smarty->assign('studios', $studios);
	$smarty->assign('languages', $languages);
	$smarty->assign('formats', $formats);
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