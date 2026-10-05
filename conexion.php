<?php
class Conexion {
    public static function conectar() {
        $conexion = mysqli_connect("localhost", "root", "", "phpavanzado");
        
     
        mysqli_set_charset($conexion, "utf8mb4");
        
        if (mysqli_connect_errno()) {
            die("Error de conexión: " . mysqli_connect_error());
        }
        
        return $conexion;
    }
}
?>