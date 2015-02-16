<?php

	session_start(); // Start a new session
	include ('../config/config.php');

	// Get the data passed from the form
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Do some basic sanitizing
	$email = stripslashes($email);
	$password = stripslashes($password);

	$sql = "SELECT * FROM users WHERE email = '".$email."' AND password='".md5($password)."'";

	$result = mysql_query($sql) or die ( mysql_error() );

	$count = 0;
	while ($row = mysql_fetch_assoc($result)) {
		$user_id = $row['id'];
		$count++;
	}

	if ($count == 1) {
			$_SESSION['loggedIn'] = $user_id;
			echo "You are logged in";
			header("Location: ../home.php");
	} else {
			$_SESSION['loggedIn'] = "false";
			echo "You are NOT logged in";
			header("Location: ../?auth=invalid");
	}

?>

