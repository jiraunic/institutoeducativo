<?php
// datos para la conexion a mysql
define('DB_SERVER','192.168.1.67');
define('DB_NAME','IEC');
define('DB_USER','perickles');
define('DB_PASS','perickles');
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
?>