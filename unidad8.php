<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <title>PHP Avanzado - Unidad 8</title>
    
    <!-- Sumamos los estilos para que los inputs queden prolijos en ambas columnas -->
    <style>
        .formulario-clases input[type="email"],
        .formulario-clases input[type="password"] {
            width: 100%; padding: 10px; margin-bottom: 15px;
            border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;
            font-family: inherit;
        }
        .formulario-clases label { display: block; margin-bottom: 5px; font-weight: bold; color: #6b7280; font-size: 0.9em; }
        .btn-verde { background-color: #10b981; color: white; border: none; padding: 10px; border-radius: 6px; cursor: pointer; width: 100%; font-weight: bold; }
        .btn-azul { background-color: #2563eb; color: white; border: none; padding: 10px; border-radius: 6px; cursor: pointer; width: 100%; font-weight: bold; }
        .btn-verde:hover { background-color: #059669; }
        .btn-azul:hover { background-color: #1d4ed8; }
        .alerta { padding: 10px; border-radius: 6px; margin-bottom: 15px; text-align: center; font-weight: bold; border: 1px solid; }
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
    
    <!-- COLUMNA IZQUIERDA: REGISTRO -->
    <section>
        <h2>Registro</h2>
        
        <?php
        // Escuchamos la URL por si viene el mensaje de éxito desde cargarusuario.php
        if(isset($_GET['reg_ok'])) {
            echo "<div class='alerta' style='background-color:#d1fae5; color:#065f46; border-color:#a7f3d0;'>✅ Usuario registrado exitosamente.</div>";
        }
        ?>
        
        <form action="cargarusuario.php" method="POST" class="formulario-clases">
            <label for="email_reg">Email:</label>
            <input type="email" id="email_reg" name="email" required>
            
            <label for="pass_reg">Contraseña:</label>
            <input type="password" id="pass_reg" name="password" required>
            
            <button type="submit" class="btn-verde">Crear Cuenta</button>
        </form>
    </section>
    
    <!-- COLUMNA DERECHA: LOGIN -->
    <aside>
        <h2 style="color: #374151; margin-top: 0; font-size: 1.5em;">Ingreso</h2>
        
        <?php
        // Escuchamos la URL por si vienen los mensajes de éxito/error desde verificarusuario.php
        if(isset($_GET['login_ok'])) {
            echo "<div class='alerta' style='background-color:#d1fae5; color:#065f46; border-color:#a7f3d0;'>🔐 ¡Login exitoso!</div>";
        }
        if(isset($_GET['login_error'])) {
            echo "<div class='alerta' style='background-color:#fee2e2; color:#991b1b; border-color:#fecaca;'>❌ Datos incorrectos.</div>";
        }
        ?>
        
        <form action="verificarusuario.php" method="POST" class="formulario-clases">
            <label for="email_login">Email:</label>
            <input type="email" id="email_login" name="email" required>
            
            <label for="pass_login">Contraseña:</label>
            <input type="password" id="pass_login" name="password" required>
            
            <button type="submit" class="btn-azul">Ingresar</button>
        </form>
    </aside>
    
    <footer>
        <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
    </footer>
 
</div>
</body>
</html>