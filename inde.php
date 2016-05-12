<?php
session_start();
include_once "conexion.php";

function verificar_login($user,$password) {
    echo $user;
    echo $password;
    $count=0;
$sql="select Nombre_usuario,pass from usuarios where Nombre_usuario='$user' and pass='$password'";

if ($resulta=mysqli_query($con,$sql))
  {
  while ($obj=mysqli_fetch_object($resulta))
    {
      $count=$count+1;
    }
  // Free result set
  mysqli_free_result($resulta);
}

}

if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if(verificar_login($_POST['user'],$_POST['password']) == 1)
        {
            $_SESSION['userid'] = $result->idusuario;
            header("location:inicio.php");

        }
        else
        {
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
        }
    }
?>
<link rel="stylesheet" type="text/css" href="css\Estilo.css">
<form action="" method="post" class="login">
    <div><label>Username</label><input name="user" type="text" ></div>
    <div><label>Password</label><input name="password" type="password"></div>
    <div><input name="login" type="submit" value="login"></div>
</form>
<?php
} else {
    echo 'Su usuario ingreso correctamente.';
}
?>