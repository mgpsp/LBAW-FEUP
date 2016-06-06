<?php
	include_once('../../config/init.php');
	include_once('../add-to-log.php');
	include_once($BASE_DIR .'database/users.php');
	include_once($BASE_DIR .'database/delivery-address.php');
	include_once($BASE_DIR .'database/city.php');

	if (isset($_POST['userEmail']))
		$userEmail = $_POST['userEmail'];

	if (!isset($userEmail))
		$userEmail = $_SESSION['email'];

	$deliveryAddress = getDeliveryAddress($userEmail);

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
			$_SESSION['error_messages'] = 'Couldn\'t edit/add delivery information.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	}

	if ($deliveryAddress != null) {
		try {
			editDeliveryAddress($deliveryaddress['deliveryadressid'], $fullname, $address, $cityid['cityid'], $postcode, $countryid);
		} catch (PDOException $e) {
			sendToLog("edit_delivery_member_" . $memberid['memberid'], $e->getMessage());
			$_SESSION['error_messages'] = 'Couldn\'t edit delivery address.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	}
	else {
		try {
			$id = addDeliveryAddress($fullname, $address, $cityid['cityid'], $postcode, $countryid);
			addDeliveryAddressToMember($userEmail, $id['deliveryadressid']);
		} catch (PDOException $e) {
			sendToLog("add_delivery_member_" . $memberid['memberid'], $e->getMessage());
			$_SESSION['error_messages'] = 'Couldn\'t add delivery address.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
		
	}
	
	$_SESSION['success_messages'] = 'Delivery address updated.';
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>