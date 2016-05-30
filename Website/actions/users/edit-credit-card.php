<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/payment-information.php');

	$creditCard = getCreditCard($_SESSION['email']);

	if (!$_POST['cardNumber'])
		$cardNumber = $creditCard['creditcardnumber'];
	else
		$cardNumber = strip_tags($_POST['cardNumber']);

	if (!$_POST['cardExpiry'])
		$cardExpiry = $creditCard['expirationdate'];
	else
		$cardExpiry = strip_tags($_POST['cardExpiry']);

	if (!$_POST['cardCVC'])
		$cardCVC = $creditCard['cvc'];
	else
		$cardCVC = strip_tags($_POST['cardCVC']);

	editCreditCard($creditCard['paymentinformationid'], $cardNumber, $cardExpiry, $cardCVC);
	$_SESSION['success_messages'] = 'Credit card information updated.';
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>