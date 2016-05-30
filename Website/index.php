<?php
	include_once('config/init.php');
	include_once('database/carousel.php');

	$carouselmovies = getCarouselMovies();

	$smarty->assign('carouselmovies', $carouselmovies);
	$smarty->display('index.tpl');
?>