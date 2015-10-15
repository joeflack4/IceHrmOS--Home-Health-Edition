<?php 
ini_set('error_log', 'data/icehrm.log');

define('CLIENT_NAME', 'app');
define('APP_BASE_PATH', 'C:\wamp\www\projects\IceHrmOS--Home-Health-Edition/');
define('CLIENT_BASE_PATH', 'C:\wamp\www\projects\IceHrmOS--Home-Health-Edition\app/');
define('BASE_URL','http://localhost/projects/IceHrmOS--Home-Health-Edition/');
define('CLIENT_BASE_URL','http://localhost/projects/IceHrmOS--Home-Health-Edition/app/');

define('APP_DB', 'icehhe');
define('APP_USERNAME', 'icehheuser');
define('APP_PASSWORD', 'Krillyn123*');
define('APP_HOST', 'localhost');
define('APP_CON_STR', 'mysql://'.APP_USERNAME.':'.APP_PASSWORD.'@'.APP_HOST.'/'.APP_DB);

//file upload
define('FILE_TYPES', 'jpg,png,jpeg');
define('MAX_FILE_SIZE_KB', 10 * 1024);
