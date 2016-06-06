<?php
	include_once('../../config/init.php');
	include_once('../add-to-log.php');
	include_once($BASE_DIR .'database/payment-information.php');
	include_once($BASE_DIR .'database/users.php');

	if (isset($_POST['userEmail']))
		$userEmail = $_POST['userEmail'];

	if (!isset($userEmail))
		$userEmail = $_SESSION['email'];

	$creditCard = getCreditCard($userEmail);

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

	if ($creditCard != null)
		try {
			editCreditCard($creditCard['paymentinformationid'], $cardNumber, $cardExpiry, $cardCVC);
		} catch (PDOException $e) {
			sendToLog("edit_creditcard_member" . $memberid['memberid'], $e->getMessage());
			$_SESSION['error_messages'] = 'Couldn\'t edit credit card information.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	else { 
		try {
			$id = addCreditCard($cardNumber, $cardExpiry, $cardCVC);
			addCreditCardToMember($userEmail, $id['paymentinformationid']);
		} catch (PDOException $e) {
			sendToLog("add_creditcard_member" . $memberid['memberid'], $e->getMessage());
			$_SESSION['error_messages'] = 'Couldn\'t add credit card information.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
		
	}

	$_SESSION['success_messages'] = 'Credit card information updated.';
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>