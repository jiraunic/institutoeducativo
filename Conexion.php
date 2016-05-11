<?php
// datos para la conexion a mysql

// Using mysqli (connecting from App Engine)
$sql = new mysqli(
  '173.194.225.117', // host
  'root', // username
  'toor',     // password
  'iec', // database name
  null,
  '/cloudsql/serviciosnubetec:basededatosiec'
  );
?>