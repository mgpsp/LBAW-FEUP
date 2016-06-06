<?php
	include_once('config/init.php');
	include_once($BASE_DIR .'pages/common/header.php');
	include_once('database/carousel.php');
	include_once('database/movies.php');

	$carouselmovies = getCarouselMovies();
	$featuredMovies = getFeaturedMovies();
	$newReleases = getNewReleases();

	$smarty->assign('featuredMovies', $featuredMovies);
	$smarty->assign('newReleases', $newReleases);
	$smarty->assign('carouselmovies', $carouselmovies);
	$smarty->display('index.tpl');
?>