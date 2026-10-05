<?php 

session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <title>PHP Avanzado - Unidad 5</title>
    
    <style>
        .formulario-clases input[type="text"],
        .formulario-clases input[type="email"],
        .formulario-clases textarea {
            width: 100%; padding: 12px; margin-bottom: 15px;
            border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;
            font-family: inherit;
        }
        .formulario-clases label { display: block; margin-bottom: 5px; font-weight: bold; color: #6b7280; }
        
      
        .caja-captcha { display: flex; align-items: center; gap: 15px; margin-bottom: 15px; }
        .caja-captcha img { border: 1px solid #9ca3af; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
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
    
    <section style="float: none; width: 100%; max-width: 600px; margin: 0 auto;">
        <div class="cabecera-amarilla">Formulario de Contacto Seguro</div>
        
        <?php
       
        if (isset($_GET['error'])) {
            echo "<div style='background-color: #fee2e2; color: #991b1b; padding: 10px; border-radius: 6px; margin-bottom: 15px; text-align: center; border: 1px solid #fecaca; font-weight: bold;'>❌ El código de seguridad es incorrecto. Intentá de nuevo.</div>";
        }
       
        if (isset($_GET['ok'])) {
            echo "<div style='background-color: #d1fae5; color: #065f46; padding: 10px; border-radius: 6px; margin-bottom: 15px; text-align: center; border: 1px solid #a7f3d0; font-weight: bold;'>✅ ¡Tu consulta fue enviada y guardada correctamente!</div>";
        }
        ?>

        <form action="cargar.php" method="POST" class="formulario-clases">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="consulta">Consulta:</label>
            <textarea id="consulta" name="consulta" rows="4" required></textarea>
            
            <label>Código de Seguridad (Captcha):</label>
            <div class="caja-captcha">
               
                <img src="captcha.php" alt="Código de seguridad">
                
                <input type="text" name="captcha_ingresado" placeholder="Escribí las letras/números" required style="margin-bottom: 0;">
            </div>
            
            <button type="submit" class="btn-enviar-azul">Enviar Consulta</button>
        </form>
    </section>
    
    <footer>
        <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
    </footer>
</div>
</body>
</html>