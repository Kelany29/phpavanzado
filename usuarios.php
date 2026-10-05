<?php
class Usuario {

    private string $nombre;
    private string $apellido;
    private string $fecha_nacimiento;


    public function __construct(string $nom, string $ape, string $fecha_nac) {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->fecha_nacimiento = $fecha_nac; 
    }


    private function calcular_edad() {
        $nacimiento = new DateTime($this->fecha_nacimiento);
        $hoy = new DateTime();
        $diferencia = $hoy->diff($nacimiento);
        
        return $diferencia->y;
    }

    
    public function imprime_caracteristicas() {
        $edad = $this->calcular_edad();
        
        echo "<div style='padding: 15px; border: 1px solid #d1d5db; border-radius: 6px; background-color: #f9fafb; margin-bottom: 15px;'>";
        echo "<h3 style='margin-top: 0; color: #374151; font-size: 1.1em;'>Datos del Usuario</h3>";
        echo "<p style='margin: 5px 0; color: #4b5563;'><strong>Nombre:</strong> {$this->nombre}</p>";
        echo "<p style='margin: 5px 0; color: #4b5563;'><strong>Apellido:</strong> {$this->apellido}</p>";
        echo "<p style='margin: 5px 0; color: #4b5563;'><strong>Edad:</strong> {$edad} años</p>";
        echo "</div>";
    }
}
?>