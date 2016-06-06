<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'pages/common/header.php');
	include_once($BASE_DIR .'database/country.php');
	include_once($BASE_DIR .'database/billing-information.php');
  	include_once($BASE_DIR .'database/payment-information.php');

	if (!isset($_SESSION['email'])) {
		header("Location: $BASE_URL");
		exit;
	}
		
	if (count($cart) == 0) {
		header("Location: $BASE_URL");
		exit;
	}

	foreach($cart as $key => $movie) {
		$total = $movie['price'] * $movie['quantity'];
		$cart[$key]['total'] = $total;
	}

	$shipping = count($cart) * 0.90 + 3.60;
	$total = $shipping + $cartCost['totalcost'];

	$creditCard = getCreditCard($_SESSION['email']);
  	$billingInformation = getBillingAddress($_SESSION['email']);
  	$countries = getCountries();

  	$smarty->assign('countries', $countries);
  	$smarty->assign('creditCard', $creditCard);
  	$smarty->assign('billingInformation', $billingInformation);
	$smarty->assign('total', $total);
	$smarty->display('checkout/checkout.tpl');
?>