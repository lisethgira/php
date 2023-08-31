<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Formulario con Bootstrap</title>
    <!-- Agrega los enlaces a los archivos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $edad = $_REQUEST['edad'];
    $sexo = $_REQUEST['sexo'];
    $roles = $_REQUEST['roles'];
    $imagen = $_FILES['imagen'];
    $path = $_SERVER['DOCUMENT_ROOT'] . "/php/imagenes" . "/" . $imagen["name"];
    $mensaje = $_REQUEST['mensaje'];
    ?>

    <div class="container mt-3">
        <h1>Resultado del Formulario</h1>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <p><?php echo $nombre; ?></p>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <p><?php echo $apellido; ?></p>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad:</label>
            <p><?php echo $edad; ?> años</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Sexo:</label>
            <p><?php echo $sexo; ?></p>
        </div>
        <div class="mb-3">
            <label class="form-label">Rol(es):</label>
            <ul>
                <?php foreach ($roles as $rol) { ?>
                    <li><?php echo $rol; ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen:</label>
            <!-- Muestra la imagen usando la etiqueta <img> -->
            <?php
            if (is_uploaded_file($imagen["tmp_name"])) {
                // La imagen se cargó correctamente
                echo '<img src="imagenes/' . $imagen["name"] . '" alt="imagen" width="100" height="100" class="img-fluid">';
            } else {
                echo 'La imagen no se cargó correctamente.';
            }
            ?>
            <br>
            <p><?php
                echo $path;
                echo "<br>";
                move_uploaded_file($imagen["tmp_name"], $path);; ?></p>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje:</label>
            <p><?php echo $mensaje; ?></p>
        </div>
    </div>
    <!-- Agrega el enlace al archivo JavaScript de Bootstrap y a jQuery (si es necesario) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>