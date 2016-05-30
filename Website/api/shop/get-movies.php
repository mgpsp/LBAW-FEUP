<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/movies.php');

	$movies = getAllMovies();
	echo json_encode($movies);
?>