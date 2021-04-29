<?php
/*CONFIGURATIONS*/
date_default_timezone_set('Asia/manila');	
define('DS' ,  DIRECTORY_SEPARATOR);
define('SITENAME' , 'Job Recruitment with HRIS');
define('APPROOT' , dirname(dirname(__FILE__)));
define('BASEROOT' , dirname(dirname(dirname(__FILE__))));
define('VIEWS' , APPROOT.DS.'templates');

define('APP_NAME' , 'JOB RECRUITMENT HRIS (BETA)');

const MAILER_AUTH = [
	'username' => 'demo@monsterthesis.com',
	'password' => 'UtF3@3r@7Kap2O',
	'host'     => 'monsterthesis.com',
	'name'     => 'Thesis Monsters',
	'replyTo'  => 'sales@monsterthesis.com',
	'replyToName' => 'Monster Thesis'
];

define('SCHEDULE_APPOINTMENT' , 'APPOINTMENT SCHEDULE');

require_once 'env.php';

