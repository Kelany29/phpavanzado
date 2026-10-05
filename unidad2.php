<?php 

session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <title>PHP Avanzado - Unidad 2</title>
    
    <style>
        .formulario-clases input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px; 
            border: 1px solid #d1d5db;
            border-radius: 6px;
            box-sizing: border-box;
            font-family: inherit;
        }
        .formulario-clases label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #6b7280;
        }
    </style>
</head>
 
<body>
 
<div class="container">
    <header>
        <h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
        <nav>
            <?php include("botonera.php"); ?>
        </nav>
    </header>
    
    <section>
        <h2>Eventos</h2>
        
        <?php
      
        if (isset($_SESSION['resultado_dias'])) {
            $dias = $_SESSION['resultado_dias'];
            
            if ($dias > 0) {
                echo "<div class='alerta-exito' style='background-color: #dbeafe; color: #1e40af; border-color: #bfdbfe; padding: 15px; border-radius: 6px; margin-bottom: 20px; border: 1px solid;'>Faltan <strong>$dias días</strong> para la fecha ingresada. ⏳</div>";
            } elseif ($dias == 0) {
                echo "<div class='alerta-exito' style='background-color: #dcfce7; color: #166534; border-color: #bbf7d0; padding: 15px; border-radius: 6px; margin-bottom: 20px; border: 1px solid;'>¡La fecha ingresada es el día de hoy! 🎉</div>";
            } else {
                $dias_pasados = abs($dias); 
                echo "<div class='alerta-exito' style='background-color: #fee2e2; color: #991b1b; border-color: #fecaca; padding: 15px; border-radius: 6px; margin-bottom: 20px; border: 1px solid;'>La fecha ingresada ya pasó hace <strong>$dias_pasados días</strong>. 🕰️</div>";
            }
            
            unset($_SESSION['resultado_dias']);
        }

     
        if (isset($_SESSION['error_fecha'])) {
            echo "<div class='alerta-exito' style='background-color: #fee2e2; color: #991b1b; border-color: #fecaca; padding: 15px; border-radius: 6px; margin-bottom: 20px; border: 1px solid;'>La fecha ingresada no existe en el calendario. ❌</div>";
            unset($_SESSION['error_fecha']);
        }
        ?>
        
        <p>Ingresá una fecha en el panel de la derecha para calcular la cantidad de días faltantes o transcurridos.</p>
    </section>
    
    <aside>
        <div class="cabecera-amarilla">Calcular Fecha</div>
        
        <form action="calculo_fecha.php" method="POST" class="formulario-clases">
            <label for="dia">Día:</label>
            <input type="number" id="dia" name="dia" min="1" max="31" placeholder="Ej: 24" required>

            <label for="mes">Mes:</label>
            <input type="number" id="mes" name="mes" min="1" max="12" placeholder="Ej: 6" required>

            <label for="anio">Año:</label>
            <input type="number" id="anio" name="anio" min="1970" max="2100" placeholder="Ej: 2026" required style="margin-bottom: 30px;">

            <button type="submit" class="btn-enviar-azul">Calcular Días</button>
        </form>
    </aside>
    
    <footer>
        <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
    </footer>
 
</div>
</body>
</html>