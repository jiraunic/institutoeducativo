<?php
// datos para la conexion a mysql
// Using MySQL API (connecting from App Engine)
$conn = mysql_connect(':/cloudsql/serviciosnubetec:basededatosiec',
  'root', // username
  'toor'      // password
  );
mysql_select_db(iec,$con);

?>