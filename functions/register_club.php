<?php

	include ('../config/config.php');

	$club_name = mysql_real_escape_string($_POST['club_name']);
	$club_about = mysql_real_escape_string($_POST['club_about']);
	$club_badge = $_FILES["club_badge"]["name"];


	mysql_real_escape_string(mysql_query("INSERT INTO clubs (name, about, logo ) VALUES('$club_name', '$club_about', '$club_badge') ") or die(mysql_error()));

	$badge_target = "uploads/badges/" . basename( $_FILES['club_badge']['name']); 

	if(move_uploaded_file($_FILES['club_badge']['tmp_name'], $badge_target));

	//header('Location: ../index.php?added=true'); 

?>