<?php
$conexion = new mysqli("sql309.infinityfree.com", "if0_39074297", "rjoU8fA5GOq", "if0_39074297_cinesmedia");
$conexion->set_charset("utf8");
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
?>
