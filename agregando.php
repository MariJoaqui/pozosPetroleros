<?php

include_once("conexion.php");

$nombrePozo = $_POST['nombrePozo'];
$medicion = $_POST['medicion'];
$fecha = $_POST['fecha'];

$agregarBDD = "INSERT INTO propiedades (nombrePozo, medidas, fecha) 
                VALUES ('$nombrePozo', '$medicion', '$fecha')";

$resultado = mysqli_query($conexion, $agregarBDD);

echo $nombrePozo;

if ($resultado) {
    ?>
    <h3>Se añadió el pozo</h3>
    <?php
} 
    else {
        ?>
        <h3>Error al añadir pozo</h3>
        <?php
    }

mysqli_close($conexion);

?>