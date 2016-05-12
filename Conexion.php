<?php
/*$sql = new mysqli(
  null, // host
  'root', // username
  'toor',     // password
  'iec', // database name
  null,
  '/cloudsql/serviciosnubetec:basededatosiec'
  );
*/

// Using mysqli (connecting from App Engine)
$sql = new mysqli(
  null, // host
  'root', // username
  '',     // password
  '', // database name
  null,
  '/cloudsql/serviciosnubetec:basededatosiec'
  );

// Using MySQL API (connecting from App Engine)
$conn = mysql_connect(':/cloudsql/serviciosnubetec:basededatosiec',
  'root', // username
  ''      // password
  );


?>