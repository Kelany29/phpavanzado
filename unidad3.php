<?php 

session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <title>PHP Avanzado - Unidad 3</title>
    
    
    <style>
        .formulario-clases input[type="text"],
        .formulario-clases input[type="email"],
        .formulario-clases textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            box-sizing: border-box;
            font-family: inherit;
        }
        .formulario-clases textarea {
            resize: vertical; 
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
        <div class="cabecera-amarilla">Comentarios</div>
        
        <?php
        
        if (file_exists("comentarios.txt")) {
         
            echo file_get_contents("comentarios.txt");
        } else {
            
            echo "<p style='color:#6b7280; text-align:center; margin-top:20px;'>Aún no hay comentarios. ¡Sé el primero en escribir!</p>";
        }
        ?>
    </section>
    
  
    <aside>
        <div class="cabecera-amarilla">Dejar Comentario</div>
        
        <form action="comentarios.php" method="POST" class="formulario-clases">
            
            <?php
           
            if (isset($_SESSION['comentario_ok'])) {
                echo "<div class='alerta-exito' style='background-color: #d1fae5; color: #065f46; padding: 10px; border-radius: 6px; text-align: center; margin-bottom: 15px; border: 1px solid #a7f3d0; font-weight: bold;'>¡Comentario guardado! ✅</div>";
                unset($_SESSION['comentario_ok']);
            }
            ?>
            
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej: Kelany" required>
            
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ej: Blanco" required>
            
            <label for="mail">Mail:</label>
            <input type="email" id="mail" name="mail" placeholder="ejemplo@correo.com" required>
            
            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>
            
            <button type="submit" class="btn-enviar-azul" style="margin-top: 10px;">Enviar Comentario</button>
        </form>
    </aside>
    
    <footer>
        <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
    </footer>
 
</div>
</body>
</html>