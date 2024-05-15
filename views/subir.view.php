<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>

<body>

    <header>
        <div class="contenedor">
            <h1 class="titulo">Foto: 1.jpg</h1>
        </div>
    </header>

    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Descripcion:</label>
            <textarea type="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

            <?php if (isset($error)) : ?>
                <P class="error"><?php echo $error; ?></P>
            <?php endif ?>

            <input type="submit" class="submit" value="Subir Foto">

        </form>
    </div>

    <footer>
        <p class="copyright">Galeria de fotos Mynor Parrales</p>
    </footer>


</body>

</html>