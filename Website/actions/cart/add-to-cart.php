<?php
  include_once('../../config/init.php');
  include_once('../add-to-log.php');
  include_once($BASE_DIR .'database/cart.php');
  include_once($BASE_DIR .'database/users.php');

  if (!isset($_SESSION['email'])) {
    $_SESSION['error_messages'] = 'You have to login before adding a product to the cart.';
    header("Location: $BASE_URL" . 'pages/users/sign/');
    exit;
  }

  $cartid = getCartID($_SESSION['email']);

  try {
  	addToCart($cartid['cartid'], $_POST['movieid'], $_POST['quantity']);
  } catch (PDOException $e) {
    if (strpos($e->getMessage(), 'moviecart_pkey') !== false)
      $_SESSION['error_messages'] = 'Movie already in cart.';
    else {
      sendToLog("add_cart", $e->getMessage());
      $_SESSION['error_messages'] = "Movie wasn't added to cart.";
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $_SESSION['success_messages'] = "Movie added to cart.";
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>