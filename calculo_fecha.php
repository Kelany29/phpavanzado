<?php

session_start();


$dia = $_POST['dia'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];


if (checkdate($mes, $dia, $anio)) {
    
  
    $fecha_actual = strtotime(date("Y-m-d"));
    
   
    $fecha_objetivo = strtotime("$anio-$mes-$dia");

   
    $diferencia_en_segundos = $fecha_objetivo - $fecha_actual;
    
   
    $dias_faltantes = $diferencia_en_segundos / 86400;


    $_SESSION['resultado_dias'] = $dias_faltantes;
    
} else {
  
    $_SESSION['error_fecha'] = true;
}


header("Location: unidad2.php");
exit();
?>