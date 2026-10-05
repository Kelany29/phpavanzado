<?php 

session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <title>PHP Avanzado - Unidad 1</title>
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
        <div class="cabecera-amarilla">Agenda de Clases</div>
        <?php include 'ver_clases.php'; ?>
    </section>
    
    <aside>
        <div class="cabecera-amarilla">Cargar Nueva Clase</div>
        
        <form action="insertar_clases.php" method="POST" class="formulario-clases">
            
            <?php
         
            if (isset($_SESSION['clase_guardada'])) {
                
            
                echo "<div class='alerta-exito'>¡Clase guardada! ✅</div>";
                
              
                unset($_SESSION['clase_guardada']);
            }
            ?>

            <label for="unidad">Unidad:</label>
            <input type="text" id="unidad" name="unidad" placeholder="Ej: Unidad 1" required>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>

            <button type="submit" class="btn-enviar-azul">Guardar Clase</button>
        </form>
    </aside>
    
    <footer>
        <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
    </footer>
 
</div>
</body>
</html>