<?php
// datos para la conexion a mysql
define('DB_SERVER','173.194.225.117');
define('DB_NAME','IEC');
define('DB_USER','root');
define('DB_PASS','toor');
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
?>