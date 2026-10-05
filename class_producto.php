<?php

require_once("conexion.php");

class Producto {
    public int $id_producto;
    public string $nombre;
    public string $descripcion;
    public float $precio;
    

    private mysqli $conexion;

    public function __construct() {
     
        $this->conexion = Conexion::conectar();
    }

    public function introducir_producto(string $nom, string $desc, float $prec) {

        $stmt = $this->conexion->prepare("INSERT INTO productos (nombre, descripcion, precio) VALUES (?, ?, ?)");
      
        $stmt->bind_param("ssd", $nom, $desc, $prec);
        return $stmt->execute();
    }

    public function eliminar_producto(int $id) {
       
        $stmt = $this->conexion->prepare("DELETE FROM productos WHERE id_producto = ?");
    
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function listar_producto() {
        $query = "SELECT * FROM productos";
        $resultado = mysqli_query($this->conexion, $query);

        if(mysqli_num_rows($resultado) == 0) {
            echo "<p style='color: #6b7280; text-align: center; margin-top: 20px;'>No hay productos cargados todavía.</p>";
            return;
        }

        echo "<div style='display: flex; flex-direction: column; gap: 15px;'>";
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<div style='padding: 15px; border: 1px solid #d1d5db; border-radius: 6px; background-color: #f9fafb; display: flex; justify-content: space-between; align-items: center;'>";
            echo "<div>";
            echo "<h4 style='margin: 0; color: #374151;'>{$fila['nombre']} <span style='color: #10b981;'>$" . number_format($fila['precio'], 2) . "</span></h4>";
            echo "<p style='margin: 5px 0 0 0; color: #6b7280; font-size: 0.9em;'>{$fila['descripcion']}</p>";
            echo "</div>";
          
            echo "<a href='unidad7.php?eliminar={$fila['id_producto']}' style='background-color: #ef4444; color: white; padding: 8px 12px; border-radius: 4px; text-decoration: none; font-weight: bold; font-size: 0.85em;'>Eliminar</a>";
            echo "</div>";
        }
        echo "</div>";
    }
}
?>