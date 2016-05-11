<?php
// datos para la conexion a mysql

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