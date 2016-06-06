<?php
	include_once('../../config/init.php');
	include_once('../add-to-log.php');
	include_once($BASE_DIR .'database/users.php');
	include_once($BASE_DIR .'database/billing-information.php');
	include_once($BASE_DIR .'database/city.php');

	if (isset($_POST['userEmail']))
		$userEmail = $_POST['userEmail'];

	if (!isset($userEmail))
		$userEmail = $_SESSION['email'];



	$billingInformation = getBillingAddress($userEmail);

	if (!$_POST['fullName'])
		$fullName = $billingInformation['fullname'];
	else
		$fullname = strip_tags($_POST['fullName']);

	if (!$_POST['address'])
		$address = $billingInformation['address'];
	else
		$address = strip_tags($_POST['address']);

	if (!$_POST['city'])
		$city = $billingInformation['city'];
	else
		$city = strip_tags($_POST['city']);

	if (!$_POST['postcode'])
		$postcode = $billingInformation['postcode'];
	else
		$postcode = strip_tags($_POST['postcode']);

	if (!$_POST['country'] || $_POST['country'] == "")
		$countryid = $billingInformation['countryid'];
	else
		$countryid = $_POST['country'];

	$cityid = getCityIDByName($city);

	if ($cityid == null) {
		try {
			$cityid = addCity($city);
		} catch (PDOException $e) {
			sendToLog("add_city", $e->getMessage());
			$_SESSION['error_messages'] = 'Couldn\'t edit/add billing information.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	}

	$memberid = getUserIDByEmail($userEmail);
	if ($billingInformation != null) {
		try {
			editBillingAddress($billingInformation['billinginformationid'], $fullname, $address, $cityid['cityid'], $postcode, $countryid);
		} catch (PDOException $e) {
			sendToLog("edit_billing_member_" . $memberid['memberid'], $e->getMessage());
			$_SESSION['error_messages'] = 'Couldn\'t edit billing information.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	}	
	else {
		try {
			$id = addBillingAddress($fullname, $address, $cityid['cityid'], $postcode, $countryid);
			addBillingAddressToMember($userEmail, $id['billinginformationid']);
		} catch (PDOException $e) {
			sendToLog("add_billing_member_" . $memberid['memberid'], $e->getMessage());
			$_SESSION['error_messages'] = 'Couldn\'t add billing information.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	}
	
	$_SESSION['success_messages'] = 'Billing information updated.';
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>