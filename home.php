<?php 
    session_start(); 
    include "config/config.php"; 
    if ($_SESSION['loggedIn'] == "false") {
        header("Location: index.php?auth=notloggedin");
    }
?>

<!DOCTYPE html>
  <html> 
    <head>
        <title>Fantasy Club Cricket</title>
        <link rel="shortcut icon" href="../img/samsung-assets/favicon.ico"/>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width,  user-scalable=no, maximum-scale=1, initial-scale=1">   

        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/responsive.css" />
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css" />

        <script type="text/javascript" src="js/libs/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="js/libs/jquery.validate.min.js"></script>
        <script type="text/javascript" src="css/fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript" src="css/fancybox/jquery.fancybox.pack.js"></script>

        <!--[if lt IE 9 ]>
            <link rel="stylesheet" type="text/css" href="../css/ie.css" />
            <script type="text/javascript" src="../js/ie.js"></script>
        <![endif]-->
    </head>
    <body>

            <p>Hello <?php echo $first_name; ?></p>

            <img src="img/fcc_logo.jpg" />

            <?php if ($team_count == '0') { ?>
                <p>You have not yet created a team/ Create </p>
            <?php } ?>

            <h2>Home</h2>
            <p>Dream Team - Top Players - All time top 5 Teams - Leaderboard</p>

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Your Team</a></li>
                <li><a href="#">Leagues</a></li>
                <li><a href="#">Your Club</a></li>
                <li><a href="#">Fixtures / Results</a></li>
                <li><a href="#">Rules &amp; FAQs</a></li>
                <li><a href="#">Statistics</a></li>
                <li><a href="#">My Profile</a></li>
                <li><a href="#">Club Admin</a></li>
                <li><a href="functions/logout.php">Logout</a></li>
            </ul>

            <?php include "controls/new_club.php"; ?>


		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>