<?php

$ruta_base = "imagen_base.jpeg"; 
$ruta_marca = "marca.png";

$imagen = imagecreatefromjpeg($ruta_base);
$marca = imagecreatefrompng($ruta_marca);

$ancho_marca = imagesx($marca);
$alto_marca = imagesy($marca);


$pos_x = (imagesx($imagen) / 2) - ($ancho_marca / 2);
$pos_y = (imagesy($imagen) / 2) - ($alto_marca / 2 );


imagecopy($imagen, $marca, $pos_x, $pos_y, 0, 0, $ancho_marca, $alto_marca);


header("Content-Type: image/jpeg");


imagejpeg($imagen);


imagedestroy($imagen);
imagedestroy($marca);
?>