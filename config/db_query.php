<?php


	
	if ($_SESSION['loggedIn'] != "false") {
        $session_id = $_SESSION['loggedIn'];


        // Get logged in user information
        $user = mysql_query("SELECT * FROM users WHERE id = '$session_id'");
        while ($user_row = mysql_fetch_assoc($user)) {
			$user_id = $user_row['id'];
			$first_name = $user_row['first_name'];
			$last_name = $user_row['last_name'];
		}


		// Check if user has a team
    	$has_team = mysql_query("SELECT * FROM teams WHERE user_id = '$session_id'");
    	$team_count = 0;
		while ($team_row = mysql_fetch_assoc($has_team)) {
			$user_id = $team_row['id'];
			$team_count++;
		}

    }

    




	$players = mysql_query("SELECT * FROM players"); // Get ALL player info
	$clubs = mysql_query("SELECT * FROM clubs"); // Get ALL clubs info

?>
