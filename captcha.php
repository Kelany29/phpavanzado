<?php
// 1. Iniciamos la sesión para poder guardar el código y compararlo después
session_start();

// 2. Avisamos al navegador que esto es una imagen, igual que en la Unidad 4
header("Content-Type: image/png");

// 3. Generamos un código aleatorio de 5 letras/números
// md5(time()) crea un texto raro basado en la hora actual, y substr() recorta solo 5 caracteres.
$codigo = substr(md5(time()), 0, 5);

// 4. GUARDAMOS el código en la sesión del usuario (CLAVE para el paso de cargar.php)
$_SESSION['codigo_captcha'] = $codigo;

// 5. Creamos una imagen vacía de 120px de ancho por 40px de alto
$imagen = imagecreatetruecolor(120, 40);

// 6. Definimos un par de colores (Fondo gris, texto negro, líneas azules)
$color_fondo = imagecolorallocate($imagen, 220, 220, 220);
$color_texto = imagecolorallocate($imagen, 0, 0, 0);
$color_lineas = imagecolorallocate($imagen, 59, 130, 246);

// 7. Pintamos el fondo de gris
imagefill($imagen, 0, 0, $color_fondo);

// 8. Dibujamos un par de líneas cruzadas para hacer "ruido" y que parezca un captcha real
imageline($imagen, 0, rand(0,40), 120, rand(0,40), $color_lineas);
imageline($imagen, 0, rand(0,40), 120, rand(0,40), $color_lineas);

// 9. Escribimos el código aleatorio sobre la imagen
imagestring($imagen, 5, 40, 12, $codigo, $color_texto);

// 10. Imprimimos la imagen y liberamos memoria
imagepng($imagen);
imagedestroy($imagen);
?>