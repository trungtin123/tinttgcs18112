<?php

define('DB_SERVER', 'ec2-52-44-55-63.compute-1.amazonaws.com');
define('DB_USERNAME', 'unxekudwxkqfpd');
define('DB_PASSWORD', 'e30160393b8a8c84b3813837f607760e9c19a07c0a989932babd360c7818fcf2');
define('DB_NAME', 'dahvicesgsvher');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
