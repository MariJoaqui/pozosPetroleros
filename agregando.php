<?php

include_once("conexion.php");

    if (isset($_POST['agg']) == 'si') {
        
        $medicion = $_POST['medicion']; 
        $fecha = $_POST['fecha']; 

        $agregarBDD = "INSERT INTO propiedades (medidas, fecha) 
                        VALUES ('$medicion', '$fecha')";

        $resultado = mysqli_query($conexion, $agregarBDD);

        header("Location: añadirPropiedades.php");
    }

    mysqli_close($conexion);

?>