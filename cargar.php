<?php
session_start();


$captcha_usuario = $_POST['captcha_ingresado'];


if ($captcha_usuario == $_SESSION['codigo_captcha']) {
    
   
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];
    

    $conexion = mysqli_connect("localhost", "root", "", "phpavanzado");
    
  
    $query = "INSERT INTO consultas (nombre, apellido, email, consulta) VALUES ('$nombre', '$apellido', '$email', '$consulta')";
    
 
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    
    
    header("Location: unidad5.php?ok=1");
    exit();

} else {
    
    
    header("Location: unidad5.php?error=1");
    exit();
    
}
?>