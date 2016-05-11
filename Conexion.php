<?php
// datos para la conexion a mysql
// Using PDO_MySQL (connecting from App Engine)
$db = new pdo(
  'mysql:unix_socket=/cloudsql/serviciosnubetec:basededatosiec',
  'root',  // username
  'toor'       // password
);

// Using mysqli (connecting from App Engine)
$sql = new mysqli(
  null, // host
  'root', // username
  'toor',     // password
  'iec', // database name
  null,
  '/cloudsql/serviciosnubetec:basededatosiec'
  );

?>