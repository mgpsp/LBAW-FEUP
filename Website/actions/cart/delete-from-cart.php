<?php
  include_once('../../config/init.php');
  include_once('../add-to-log.php');
  include_once($BASE_DIR .'database/cart.php');
  include_once($BASE_DIR .'database/users.php');

  $cartid = getCartID($_SESSION['email']);
  $memberid = getUserIDByEmail($_SESSION['email']);

  try {
  	deleteFromCart($_GET['movieid'], $cartid['cartid']);
  } catch (PDOException $e) {
    sendToLog("delete_cart_member_" . $memberid['memberid'] . "_movie_" . $_GET['movieid'], $e->getMessage());
  	$_SESSION['error_messages'] = "Movie wasn't removed form cart.";
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>