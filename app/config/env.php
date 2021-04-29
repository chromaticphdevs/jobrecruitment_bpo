<?php

	$env = 'local';

	switch($env)
	{
		case 'local':
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			
			define('DBHOST' , 'localhost');
			define('DBUSER' , 'root');
			define('DBPASS' , '');
			define('DBNAME' , 'careersm_main');
			define('URL' , 'http://localhost/metrojobs');
		break;

		case 'live':

			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			

			define('DBHOST' , 'localhost');

			define('DBUSER' , 'monshhic_app');

			define('DBPASS' , 'Z_t,iS$DLk@F');

			define('DBNAME' , 'monshhic_jobrecruitment');

			define('URL' , 'https://app.monsterthesis.com');

			// error_reporting(0);
		break;
	}

	define('URL_CLIENT' , URL.DS.'app/client');
	define('URL_ADMIN' , URL.DS.'app/admin');
	define('URL_CUSTOMER' , URL.DS.'app/customer');