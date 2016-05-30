<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');
	include_once($BASE_DIR .'database/delivery-address.php');
	include_once($BASE_DIR .'database/city.php');

	$deliveryAddress = getDeliveryAddress($_SESSION['email']);

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
	var_dump($cityid);
	if (!isset($cityid))
		$cityid = addCity($city);

	editDeliveryAddress($deliveryaddress['deliveryaddressid'], $fullname, $address, $cityid['cityid'], $postcode, $countryid);
	$_SESSION['success_messages'] = 'Delivery address updated.';
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>