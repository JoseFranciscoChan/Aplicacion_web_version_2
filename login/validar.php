<?php

$correo1=$_POST['correo'];
$contraseña2=$_POST['contraseña'];

session_start();
$_SESSION['correo']=$correo1;

$encriptarContr =sha1($contraseña2);

include('dp.php');


$consulta="SELECT*FROM usuarios where usuario='$correo1' and password='$encriptarContr'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:formulario.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">ERROR!! error sus credenciales son incorrectos</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>