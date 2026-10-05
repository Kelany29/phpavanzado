<div class="grilla-clases">
    <?php
    $conexion_ver = mysqli_connect("localhost", "root", "", "phpavanzado");
    
    $consulta_ver = "SELECT unidad, fecha FROM clases ORDER BY id_clase DESC";
    $resultado = mysqli_query($conexion_ver, $consulta_ver);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $fecha_formateada = date("d/m/Y", strtotime($fila['fecha']));
    ?>
            <div class="tarjeta-clase">
                <h4><?php echo $fila['unidad']; ?></h4>
                <p>📅 <?php echo $fecha_formateada; ?></p>
            </div>
    <?php
        }
    } else {
        echo "<p style='color:#6b7280; text-align:center; margin-top:20px;'>Aún no hay clases cargadas.</p>";
    }

    mysqli_close($conexion_ver);
    ?>
</div>