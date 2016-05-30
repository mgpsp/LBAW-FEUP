<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/billing-information.php');
  include_once($BASE_DIR .'database/delivery-address.php');
  include_once($BASE_DIR .'database/payment-information.php');
  include_once($BASE_DIR .'database/purchases.php');
  include_once($BASE_DIR .'database/country.php');
  include_once($BASE_DIR .'database/wishlist.php');

  if (!isset($_SESSION['email']))
		header("Location: $BASE_URL");

  $name = getUserName($_SESSION['email']);
  $creditCard = getCreditCard($_SESSION['email']);
  $billingInformation = getBillingAddress($_SESSION['email']);
  $deliveryAddress = getDeliveryAddress($_SESSION['email']);
  $orders = getOrders($_SESSION['email'], 0);
  $countries = getCountries();
  $userID = getUserIDByEmail($_SESSION['email']);
  $wishlist = getWishlist($userID['memberid']);

  $smarty->assign('name', $name);
  $smarty->assign('creditCard', $creditCard);
  $smarty->assign('billingInformation', $billingInformation);
  $smarty->assign('deliveryAddress', $deliveryAddress);
  $smarty->assign('orders', $orders);
  $smarty->assign('countries', $countries);
  $smarty->assign('wishlist', $wishlist);
  $smarty->display('users/account.tpl');
?>