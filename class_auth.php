<?php

require_once("conexion.php");

class Autenticacion {
 
    private mysqli $conexion;

    public function __construct() {
    
        $this->conexion = Conexion::conectar();
    }

   
    public function registrar_usuario(string $email, string $password) {
    
        $pass_encriptada = password_hash($password, PASSWORD_DEFAULT);
        
    
        $stmt = $this->conexion->prepare("INSERT INTO registro (email, contrasena) VALUES (?, ?)");
      
        $stmt->bind_param("ss", $email, $pass_encriptada);
        
        return $stmt->execute();
    }

    
    public function verificar_usuario(string $email, string $password) {
       

        $stmt = $this->conexion->prepare("SELECT contrasena FROM registro WHERE email = ?");
        // "s" = string
        $stmt->bind_param("s", $email);
        $stmt->execute();
        
 
        $resultado = $stmt->get_result();

    
        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            
        
            if (password_verify($password, $fila['contrasena'])) {
                return true; 
            }
        }
        return false; 
    }
}
?>