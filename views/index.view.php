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
        <h1 class="titulo">Mi Galeria de fotos con PHP y MySQL</h1>
    </div>
</header>

<section class="fotos">
     <div class="contenedor">
    
        
     <?php foreach($fotos as $foto): ?>
          <div class="thumb">
            <a href="foto.php?id=<?php echo $foto['id']; ?>">
            <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
            </a>
          </div>
        <?php endforeach ?>


        <div class="paginacion">

            <?php if($pagina_actual > 1): ?>
                <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <?php endif ?>

                <?php if($total_paginas != $pagina_actual): ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Anterior<i class="fa fa-long-arrow-right"></i> </a>
                <?php endif ?>
            <!-- <a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
            <a href="#" class="derecha">Pagina Anterior<i class="fa fa-long-arrow-right"></i> </a> -->
        </div>
     </div>
</section>

<footer>
    <p class="copyright">Galeria de fotos Mynor Parrales</p>
</footer>

    
</body>
</html>