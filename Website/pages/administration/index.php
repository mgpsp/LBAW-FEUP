<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'pages/common/header.php');
	include_once($BASE_DIR .'database/users.php');
	include_once($BASE_DIR .'database/movies.php');
	include_once($BASE_DIR .'database/genre.php');
	include_once($BASE_DIR .'database/format.php');
	include_once($BASE_DIR .'database/language.php');
	include_once($BASE_DIR .'database/studio.php');
	include_once($BASE_DIR .'database/carousel.php');
	include_once($BASE_DIR .'database/purchases.php');

	function readLog() {
		$directory = "../../logs/";
		$files = scandir($directory);
		$errors = [];
		foreach($files as $file) {
			if ($file != "." && $file != "..") {
				$filename = $directory . $file;
				$lines = file($filename, FILE_IGNORE_NEW_LINES);
				$errorInfo = [];
				for ($i = 0; $i < count($lines); $i++) {
					$errorInfo[$i] = $lines[$i];
					if ($i > 2)
						$errorInfo[2] = $errorInfo[2] . "<br>" . $lines[$i];
				}
				$errorInfo[3] = $filename;
				array_push($errors, $errorInfo);
			}
		}
		return $errors;
	}

	if (!isset($_SESSION['admin'])) {
		header("Location: $BASE_URL");
		exit;
	}

	$users = getAllUsers();
	$movies = getAllMovies();
	$genres = getGenres();
	$formats = getFormats();
	$languages = getLanguages();
	$studios = getStudios();
	$carousel = getCarouselMovies();
	$orders = getAllOrders();
	$errors = readLog();

	$smarty->assign('orders', $orders);
	$smarty->assign('errors', $errors);
	$smarty->assign('carousel', $carousel);
	$smarty->assign('genres', $genres);
	$smarty->assign('studios', $studios);
	$smarty->assign('languages', $languages);
	$smarty->assign('formats', $formats);
	$smarty->assign('users', $users);
	$smarty->assign('movies', $movies);
	$smarty->display('administration/admin.tpl');
?>