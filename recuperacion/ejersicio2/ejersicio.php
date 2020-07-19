<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../styles.css">
    <title>Document</title>
  </head>
  <body>
  <div class="card">
  <h2>Ejersicio1</h2>
  <hr>
    <?php
        $megas= $_REQUEST["megas"];
        $cantidadDvd = ($megas * 1000)/7;
    echo "<p> para una base de datos de {$megas} megas se deben utilizar {$cantidadDvd} dvds de 7gb</p>";
    ?>
    <hr>
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>
