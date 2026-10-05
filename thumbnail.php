<?php

header("Content-Type: image/png");


$origen = imagecreatefrompng("unidad4.png");


$ancho_orig = imagesx($origen);
$alto_orig = imagesy($origen);

// 4. LAS NUEVAS MEDIDAS: Definimos los 150x150 píxeles que pide la consigna
$ancho_nuevo = 150;
$alto_nuevo = 150;


$destino = imagecreatetruecolor($ancho_nuevo, $alto_nuevo);


imagealphablending($destino, false);
imagesavealpha($destino, true);

// 7. LA REDIMENSIÓN: Copiamos la imagen original al lienzo nuevo, achicándola
// Esta función es larga porque le pasamos: destino, origen, X/Y destino, X/Y origen, ancho/alto nuevo, ancho/alto original
imagecopyresampled($destino, $origen, 0, 0, 0, 0, $ancho_nuevo, $alto_nuevo, $ancho_orig, $alto_orig);

// 8. LA EXPORTACIÓN: Imprimimos la miniatura hacia el navegador
imagepng($destino);

// 9. LA LIMPIEZA: Liberamos la memoria borrando ambas imágenes
imagedestroy($destino);
imagedestroy($origen);
?>