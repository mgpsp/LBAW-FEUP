<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'pages/common/header.php');

  if (isset($_SESSION['email']))
  	header('Location: $BASE_URL');
  
  $smarty->display('users/sign.tpl');
?>