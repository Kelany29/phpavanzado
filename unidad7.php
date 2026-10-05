<?php 

ob_start(); 
session_start(); 


require_once("class_producto.php");
$gestor_productos = new Producto();


if (isset($_POST['agregar_producto'])) {
    $gestor_productos->introducir_producto($_POST['nombre'], $_POST['descripcion'], $_POST['precio']);
    header("Location: unidad7.php?ok=1");
    exit();
}


if (isset($_GET['eliminar'])) {
    $gestor_productos->eliminar_producto($_GET['eliminar']);
    header("Location: unidad7.php?borrado=1");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <title>PHP Avanzado - Unidad 7</title>
 

    <style>
        .formulario-clases input[type="text"],
        .formulario-clases input[type="number"],
        .formulario-clases textarea {
            width: 100%; padding: 10px; margin-bottom: 15px;
            border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box;
            font-family: inherit;
        }
        .formulario-clases label { display: block; margin-bottom: 5px; font-weight: bold; color: #6b7280; font-size: 0.9em; }
        .btn-enviar-azul { background-color: #2563eb; color: white; border: none; padding: 10px 15px; border-radius: 6px; cursor: pointer; font-weight: bold; width: 100%; }
        .btn-enviar-azul:hover { background-color: #1d4ed8; }
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
        <h2>Compras</h2>
        
        <?php
      
        if(isset($_GET['ok'])) echo "<div style='background-color:#d1fae5; color:#065f46; padding:10px; border-radius:6px; margin-bottom:15px; text-align:center;'>✅ Producto guardado correctamente.</div>";
        if(isset($_GET['borrado'])) echo "<div style='background-color:#fee2e2; color:#991b1b; padding:10px; border-radius:6px; margin-bottom:15px; text-align:center;'>🗑️ Producto eliminado del sistema.</div>";
        
       
        $gestor_productos->listar_producto();
        ?>
    </section>
    
    <aside>
        <h3 style="color: #374151; margin-top: 0;">Cargar Producto</h3>
        
        <form action="unidad7.php" method="POST" class="formulario-clases">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required maxlength="30">
            
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" rows="3" required maxlength="255"></textarea>
            
            <label for="precio">Precio ($):</label>
            <input type="number" step="0.01" id="precio" name="precio" required>
            
            <button type="submit" name="agregar_producto" class="btn-enviar-azul">Guardar Producto</button>
        </form>
    </aside>
    
    <footer>
        <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
    </footer>
 
</div>
</body>
</html>