<?php
$sql = new mysqli(
  null, // host
  'root', // username
  'toor',     // password
  'iec', // database name
  null,
  '/cloudsql/serviciosnubetec:basededatosiec'
  );
mysql_select_db(iec,$sql);

?>