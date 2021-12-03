<?php

include_once("conexion.php");

$eliminar = $_GET['pozo'];

$sentencia = "DELETE FROM pozos WHERE nombrePozo='$eliminar'";
mysqli_query($conexion, $sentencia);

mysqli_close($conexion);

header("Location: index.php");

?>