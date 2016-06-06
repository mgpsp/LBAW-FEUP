<?php
	include_once('../../config/init.php');
	include_once('../add-to-log.php');
	include_once($BASE_DIR .'database/users.php');

	if (isset($_POST['userEmail']))
		$userEmail = $_POST['userEmail'];

	if (!isset($userEmail))
		$userEmail = $_SESSION['email'];

	$name = getUserName($userEmail);

	if (!$_POST['email'])
		$email = $userEmail;
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

	if ($email != $userEmail) {
		$id = getUserIDByEmail($email);
		if (isset($id['memberid'])) {
			$_SESSION['error_messages'] = 'E-mail is already in use.';
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}
	}

	$userID = getUserIDByEmail($userEmail);
	try {
		editUserInfo($firstName, $lastName, $email, $password, $userID['memberid']);
	} catch (PDOException $e) {
		sendToLog("edit_member_" . $memberid['memberid'], $e->getMessage());
		$_SESSION['error_messages'] = 'Couldn\'t edit user information.';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
	 
	if (isset($_SESSION['email']))
		$_SESSION['email'] = $email;

	$_SESSION['success_messages'] = 'User information updated.';
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>	