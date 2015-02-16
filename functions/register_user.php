<?php

	include ('../config/config.php');

	$first_name = mysql_real_escape_string($_POST['first_name']);
	$last_name = mysql_real_escape_string($_POST['last_name']);
	$email = $_POST['email'];
	$password = mysql_real_escape_string($_POST['password']);
	$md5_password = md5($password);

	$club = $_POST['club'];
	$facebook_id = "";


	mysql_real_escape_string(mysql_query("INSERT INTO users (first_name, last_name, email, password, club, facebook_id ) VALUES('$first_name', '$last_name', '$email', '$md5_password', '$club', '$facebook_id' ) ") or die(mysql_error()));

?>