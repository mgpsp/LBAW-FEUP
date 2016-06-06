<?php
  include_once('../../config/init.php');
  include_once('../add-to-log.php');
  include_once($BASE_DIR .'database/studio.php');

  if(!isset($_SESSION['admin']))
  	header("Location: $BASE_URL");

  try {
  	addStudio($_GET['name']);
  } catch (PDOException $e) {
    sendToLog("add_studio", $e->getMessage());
  	$_SESSION['error_messages'] = 'Studio wasn\'t added.';
  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>