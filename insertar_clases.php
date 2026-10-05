<?php

session_start();

$conexion = mysqli_connect("localhost", "root", "", "phpavanzado");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$unidad = $_POST['unidad'];
$fecha = $_POST['fecha'];


$consulta = "INSERT INTO clases (unidad, fecha) VALUES ('$unidad', '$fecha')";
mysqli_query($conexion, $consulta);


mysqli_close($conexion);


$_SESSION['clase_guardada'] = true;


header("Location: unidad1.php");
exit();
?>