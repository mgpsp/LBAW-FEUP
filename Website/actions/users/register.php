<?php
  include_once('../../config/init.php');
  include_once('../add-to-log.php');
  include_once($BASE_DIR .'database/users.php');  

  if (!$_POST['emailReg'] || !$_POST['firstName'] || !$_POST['lastName'] || !$_POST['passwordReg']) {
    $_SESSION['error_messages'] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header('Location:' . $BASE_URL . 'pages/sign/');
    exit;
  }

  $firstName = strip_tags($_POST['firstName']);
  $lastName = strip_tags($_POST['lastName']);
  $email = strip_tags($_POST['emailReg']);
  $password = $_POST['passwordReg'];

  try {
    createUser($firstName, $lastName, $email, $password);
  } catch (PDOException $e) {
    if (strpos($e->getMessage(), 'member_email_key') !== false) {
      $_SESSION['error_messages'] = 'Duplicate email.';
      $_SESSION['field_errors']['email'] = 'Email already exists';
    }
    else {
      sendToLog("register", $e->getMessage());
      $_SESSION['error_messages'] = 'Error creating user.';
    }

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/sign');
    exit;
  }
  $_SESSION['success_messages'] = 'User registered successfully';
  $_SESSION['email'] = $email;
  header("Location: $BASE_URL");
?>