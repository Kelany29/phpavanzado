<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <title>PHP Avanzado - Unidad 4</title>
    <style>
        .galeria {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin-top: 20px;
            align-items: center;
        }
        .caja-imagen {
            background-color: #f9fafb;
            padding: 15px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            text-align: center;
            width: 100%;
            max-width: 600px;
            box-sizing: border-box;
        }
        .caja-imagen img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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
    
    <section style="float: none; width: 100%;">
        <div class="cabecera-amarilla">Imágenes generadas con PHP</div>
        
        <div class="galeria">
            <div class="caja-imagen">
                <h3 style="margin-top: 0; color: #374151;">1. Imagen con Marca de Agua</h3>
                <img src="marca_agua.php" alt="Imagen procesada con marca de agua">
            </div>

            <div class="caja-imagen">
                <h3 style="margin-top: 0; color: #374151;">2. Thumbnail</h3>
                <img src="thumbnail.php" alt="Miniatura de 150x150">
            </div>
        </div>
    </section>
    
    <footer>
        <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
    </footer>
 
</div>
</body>
</html>