<?php
  include_once('../../config/init.php');
	include_once($BASE_DIR .'database/wishlist.php');
  include_once($BASE_DIR .'database/users.php');

  if(!isset($_SESSION['email'])) {
  	echo json_encode('login');
  	exit;
  }
 
	if (isset($_GET['id'])) {
		if (preg_match('/^[0-9]*$/', $_GET['id']))
	    $movieID = $_GET['id'];
	}
	else
	 exit;

	$userID = getUserIDByEmail($_SESSION['email']);
  try {
    $returnCode = addToWishlist($userID['memberid'], $movieID);
  } catch (PDOException $e) {
    $returnCode = $e->getMessage();
  }
  echo json_encode($returnCode);
?>