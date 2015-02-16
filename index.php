<?php 
    include "config/config.php";
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

            <img src="img/fcc_logo.jpg" />

            <?php include "controls/new_user.php"; ?>

    		<?php include "controls/login.php"; ?>


		<script type="text/javascript" src="js/scripts.js"></script>
	</body>
</html>