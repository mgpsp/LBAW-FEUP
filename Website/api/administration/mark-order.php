<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/purchases.php');

  if(!isset($_SESSION['admin']))
  	header("Location: $BASE_URL");

  try {
  	$returnCode = markOrderAs($_GET['purchaseid'], $_GET['status']);
  } catch (PDOException $e) {
  	$returnCode = $e->getMessage();
  }
  echo json_encode($returnCode);
?>