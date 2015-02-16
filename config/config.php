<?php
	//echo phpinfo();
	
	error_reporting(E_ALL ^ E_NOTICE);
	$host = $_SERVER['HTTP_HOST'];
	
	if ($host == 'localhost') {

		define('DB_SERVER', 'localhost'); // eg, localhost - should not be empty for productive servers
		define('DB_SERVER_USERNAME', 'root');
		define('DB_SERVER_PASSWORD', '');
		define('DB_DATABASE', 'fantasy_cricket');
		define('USE_PCONNECT', 'false'); // use persistent connections?
		define('STORE_SESSIONS', ''); // leave empty '' for default handler or set to 'mysql'
	}
	
	else {

		define('DB_SERVER', 'localhost'); // eg, localhost - should not be empty for productive servers
		define('DB_SERVER_USERNAME', 'budweiser_admin');
		define('DB_SERVER_PASSWORD', 'Nr3Ky1R7');
		define('DB_DATABASE', 'fantasy_cricket');
		define('USE_PCONNECT', 'false'); // use persistent connections?
		define('STORE_SESSIONS', ''); // leave empty '' for default handler or set to 'mysql'

	}

	//Global variables
	include ('scoring.php');

	// Connect to DB
	require('db_config.php');
	require('db_query.php');

?>
