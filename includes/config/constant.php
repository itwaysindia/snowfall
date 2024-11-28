<?php 

if(ENVIRONMENT == 'development'){    
    error_reporting(~E_NOTICE);
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
}
if(ENVIRONMENT == 'production'){
    error_reporting(0);   
    ini_set('display_errors', 'off');

}

define('HOSTS', 'localhost'); 
define('USERNAME', 'root'); 
define('PASSWORD', ''); 
define('DATABASE', 'snowfall');   



define('BASE_PATH', __DIR__); 
define('WEBSITE', 'https://server.itways.in/projects/snowfall/'); 

define('BASE_URL', '/snowfall/');


$folder = str_replace('/', '', $_SERVER['REQUEST_URI']);

define('DIR', $folder);


define ('PMS_PRO', 'PMS Pro');

define('CURRENCY', '£');

define('C_CODE', '+91');


// define('DOCROOT', dirname(__FILE__));
define('DOCROOT', dirname(dirname(__FILE__))); // Adjust this as needed



?>
