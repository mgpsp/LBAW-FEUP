<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!$_POST['email'] || !$_POST['password']) {
    $_SESSION['error_messages'] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (isLoginCorrect($email, $password)) {
    if ($email === 'admin')
      $_SESSION['admin'] = 'admin';
    else
      $_SESSION['email'] = $email;
    $_SESSION['success_messages'] = 'Successful login.';
  } else {
    $_SESSION['error_messages'] = 'Incorrect e-mail address or password.';  
  }

  if (isset($_SESSION['admin']))
    header("Location: " . $BASE_URL . "pages/administration/admin.php");
  else if (isset($_SESSION['email']))
    header("Location: $BASE_URL");
  else
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>