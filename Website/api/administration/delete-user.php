<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  if(!isset($_SESSION['admin']))
  	header("Location: $BASE_URL");

  try {
  	$returnCode = deleteUser($_GET['id']);
  } catch (PDOException $e) {
  	$returnCode = $e->getMessage();
  }
  echo json_encode($returnCode);
?>