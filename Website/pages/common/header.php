<?php
	include_once($BASE_DIR .'database/users.php');
	include_once($BASE_DIR .'database/cart.php');
	include_once($BASE_DIR .'database/movies.php');

	$cartid = getCartID($_SESSION['email']);
	$cartCost = getCartCost($cartid['cartid']);
	$cart = getUserCart($cartid['cartid']);
	$cartItems = count($cart);

	$url =  "{$_SERVER['REQUEST_URI']}";
	$page = str_replace($BASE_URL . "pages/", "", htmlspecialchars($url, ENT_QUOTES, 'UTF-8'));
	$pages = preg_split("/\//", $page);
	
	if ($pages[0] == 'shop')
		$pageTitle = 'Shop';
	else if ($pages[0] == 'product') {
		if (isset($_GET['id']) && preg_match('/^[0-9]+$/', $_GET['id']))
			$id = $_GET['id'];
		else{
			header("Location: $BASE_URL");
			exit;
		}
		$movieinfo = getMovieInfo($id);
		$parts = explode('-', $movieinfo['releasedate']);
		$pageTitle = $movieinfo['moviename'] . " (" . $parts[0] .")";

		if ($pages[1] == 'reviews')
			$pageTitle = 'Reviews - ' . $pageTitle;
	}
	else if ($pages[0] == 'users') {
		if ($pages[1] == 'my-account')
			$pageTitle = 'My account';
		else
			$pageTitle = 'Orders';
	}
	else if ($pages[0] == 'cart')
		$pageTitle = 'Cart';
	else if ($pages[0] == 'checkout')
		$pageTitle = 'Checkout';
	else if ($pages[0] == 'search')
		$pageTitle = 'Search results';
	else if ($pages[0] == 'sign')
		$pageTitle = 'Sign in';
	else if ($pages[0] == 'administration') {
		$pageTitle = 'Manage website';
		if ($pages[1] == 'edit-user')
			$pageTitle = 'Edit user';
	}
	else
		$pageTitle = 'moviebox';

	$smarty->assign('pageTitle', $pageTitle);
	$smarty->assign('cartCost', $cartCost['totalcost']);
	$smarty->assign('cartItems', $cartItems);
?>