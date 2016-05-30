<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');

	$name = getUserName($_SESSION['email']);

	if (!$_POST['email'])
		$email = $_SESSION['email'];
	else
		$email = strip_tags($_POST['email']);

	if (!$_POST['firstName'])
		$firstName = $name['firstName'];
	else
		$firstName = strip_tags($_POST['firstName']);

	if (!$_POST['lastName'])
		$lastName = $name['lastName'];
	else
		$lastName = strip_tags($_POST['lastName']);

	if (!$_POST['password']) 
		$password = "";
	else
		$password = $_POST['password'];

	if ($email != $_SESSION['email']) {
		$id = getUserIDByEmail($email);
		if (isset($id['memberid'])) {
			$_SESSION['error_messages'] = 'E-mail is already in use.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	}

	$userID = getUserIDByEmail($_SESSION['email']);
	editUserInfo($firstName, $lastName, $email, $password, $userID['memberid']);
	$_SESSION['email'] = $email;
	$_SESSION['success_messages'] = 'User information updated.';
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>	