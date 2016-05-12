<?php
include_once "conexion.php";
// Check connection
$count=0;
$user="administrador";
$password="admin";
$sql="select Nombre_usuario,pass from usuarios where Nombre_usuario='$user' and pass='$password'";

if ($result=mysqli_query($con,$sql))
  {
  while ($obj=mysqli_fetch_object($result))
    {
      $count=$count+1;
      printf($count);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>