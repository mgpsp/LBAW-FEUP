<?php
  session_set_cookie_params(3600, '/~lbaw1531'); 
  session_start();

  error_reporting(E_ERROR | E_WARNING); // E_NOTICE by default

  date_default_timezone_set('UTC+1');

  $BASE_DIR = '/opt/lbaw/lbaw1531/public_html/final/'; 
  $BASE_URL = '/~lbaw1531/final/'; 

  $conn = new PDO('pgsql:host=dbm;dbname=lbaw1531', 'lbaw1531', 'MO66O3K0');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->exec('SET SCHEMA \'final\''); 

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
  
  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);  
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('EMAIL', $_SESSION['email']);
  $smarty->assign('ADMIN', $_SESSION['admin']);
  
  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);  
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);
?>
