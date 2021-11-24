
<?php

include('dp.php');

if (isset($_POST['registrarse'])) {
    $animal1=$_POST["animal"];
    $color1=$_POST["color"];

    $encriptarA = sha1($animal1);
    $encriptarB = sha1($color1);


    $insertarD= "INSERT INTO test (animal, color)
                             VALUES ('$encriptarA','$encriptarB')"; 

    $ejecutarInsertar = mysqli_query($conexion,$insertarD);

    if (!$ejecutarInsertar) {
        echo "Error no se a guardado";
    }
    else{
        echo "Enviado";
        ?>

        <?php
        include("formulario.php");
        
    }
}

?>
