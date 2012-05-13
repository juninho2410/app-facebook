<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'efsexsho_admin');
define('DB_PASSWORD', 'adpgz3ub');
define('DB_DATABASE', 'efsexsho_app');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
mysql_query ("set character_set_results='utf8'");   
?>