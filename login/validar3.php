
<?php

include('dp.php');

if (isset($_POST['registrarse'])) {
    $correo1=$_POST["correo"];
    $nombre1=$_POST["nombre"];
    $apellido1=$_POST["apellido"];   
    $contraseña1=$_POST["contraseña"];

    
    $insertarDatos= "INSERT INTO usuario (correo, nombre, apellido, contraseña)
                             VALUES ('$correo1', '$nombre1','apellido1','contraseña1')"; 

    $ejecutarI = mysqli_query($conexion,$insertarDatos);

    if (!$ejecutarI) {
        echo "Error no se a guardado";
    }
    else{
        echo "Registrado";
    ?>

        <?php
        include("index.php");
        
    }
}

?>
