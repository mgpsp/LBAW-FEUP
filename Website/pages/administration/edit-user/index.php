<?php
  include_once('../../../config/init.php');
  include_once($BASE_DIR .'pages/common/header.php');
  include_once($BASE_DIR .'database/billing-information.php');
  include_once($BASE_DIR .'database/delivery-address.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/payment-information.php');
  include_once($BASE_DIR .'database/country.php');

  if (!isset($_GET['id']) || !preg_match('/^[0-9]+$/', $_GET['id'])) {
    header("Location: $BASE_URL" . "pages/administration/");
    exit;
  }
		
  $email = getUserEmailByID($_GET['id']);
  $name = getUserName($email['email']);
  $creditCard = getCreditCard($email['email']);
  $billingInformation = getBillingAddress($email['email']);
  $deliveryAddress = getDeliveryAddress($email['email']);
  $countries = getCountries();

  $smarty->assign('name', $name);
  $smarty->assign('userEmail', $email['email']);
  $smarty->assign('creditCard', $creditCard);
  $smarty->assign('billingInformation', $billingInformation);
  $smarty->assign('deliveryAddress', $deliveryAddress);
  $smarty->assign('countries', $countries);
  $smarty->display('administration/edit-user.tpl');
?>