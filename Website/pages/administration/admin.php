<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');
	include_once($BASE_DIR .'database/movies.php');

	if (!isset($_SESSION['admin']))
		header("Location: $BASE_URL");

	$users = getAllUsers();
	$movies = getAllMovies();
	
	$smarty->assign('users', $users);
	$smarty->assign('movies', $movies);
	$smarty->display('administration/admin.tpl');
?>