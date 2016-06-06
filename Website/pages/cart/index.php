<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'pages/common/header.php');

	if (!isset($_SESSION['email'])) {
		header("Location: $BASE_URL");
		exit;
	}
		
	foreach($cart as $key => $movie) {
		$total = $movie['price'] * $movie['quantity'];
		$cart[$key]['total'] = $total;
	}

	$shipping = count($cart) * 0.90 + 3.60;
	$total = $shipping + $cartCost['totalcost'];

	$smarty->assign('shipping', $shipping);
	$smarty->assign('subtotal', $cartCost['totalcost']);
	$smarty->assign('total', $total);
	$smarty->assign('cart', $cart);
	$smarty->display('cart/cart.tpl');
?>