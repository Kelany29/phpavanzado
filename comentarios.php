<?php
session_start();


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$comentario = $_POST['comentario'];


date_default_timezone_set('America/Argentina/Buenos_Aires'); 
$fecha_hora = date("d/m/Y H:i:s");


$texto_a_guardar = "<div class='tarjeta-clase' style='margin-bottom: 15px;'>";
$texto_a_guardar .= "<h4 style='margin-bottom: 5px; color: #333;'>$nombre $apellido <span style='font-size: 0.8em; color: #666; font-weight: normal;'>($mail)</span></h4>";
$texto_a_guardar .= "<p style='color: #444; margin: 0;'>$comentario</p>";
$texto_a_guardar .= "<p style='font-size: 0.8em; color: #999; margin-top: 10px; margin-bottom: 0;'>Enviado el: $fecha_hora</p>";
$texto_a_guardar .= "</div>\n";

$archivo = fopen("comentarios.txt", "a");
fputs($archivo, $texto_a_guardar);
fclose($archivo);


$_SESSION['comentario_ok'] = true;
header("Location: unidad3.php");
exit();
?>