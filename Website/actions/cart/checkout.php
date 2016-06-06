<?php
    include_once('../../config/init.php');
    include_once('../add-to-log.php');
  	include_once($BASE_DIR .'database/cart.php');
  	include_once($BASE_DIR .'database/users.php');
  	include_once($BASE_DIR .'database/purchases.php');
    include_once($BASE_DIR .'database/movies.php');

  	$cost = $_GET['cost'];
  	$cartid = getCartID($_SESSION['email']);
  	$movies = getUserCart($cartid['cartid']);
  	$memberid = getUserIDByEmail($_SESSION['email']);
  	$date = date("Y-m-d H:i:s");

    try {
      addOrder($memberid['memberid'], $cost, $date, $movies);
    } catch (PDOException $e) {
      sendToLog("purchase", $e->getMessage());
      $_SESSION['error_messages'] = 'Order wasn\'t placed.';
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit;
    }
  	
    try {
      clearCart($cartid['cartid']);
    } catch (PDOException $e) {
      sendToLog("clear_cart_member" . $memberid['memberid'], $e->getMessage());
      $_SESSION['error_messages'] = 'Couldn\'t clear cart.';
      header('Location: ' . $_SERVER['HTTP_REFERER']);
      exit;
    }

    foreach($movies as $movie) {
      try {
        decreaseStock($movie['movieid'], $movie['quantity']);
      } catch (PDOException $e) {
        sendToLog("decrease_stock_movie" . $movie['movieid'], $e->getMessage());
      }
    }
    
  	$_SESSION['success_messages'] = "Order placed! Check your order below.";
  	header("Location: $BASE_URL" . "pages/users/orders/");
?>