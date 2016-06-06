<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'pages/common/header.php');
	include_once($BASE_DIR .'database/movies.php');
	include_once($BASE_DIR .'database/genre.php');
	include_once($BASE_DIR .'database/format.php');

	$genres = getGenres();
	$formats = getFormats();

	$smarty->assign('genres', $genres);
	$smarty->assign('formats', $formats);
	$smarty->display('shop/shop.tpl');
?>