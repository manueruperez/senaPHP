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
        $nombres= $_REQUEST["nombres"];
        $valor= $_REQUEST["valor"];
        $tiempo = $_REQUEST["tiempo"];
        $resultado = $valor*1.05*$tiempo;
        echo "<p>{$nombres}<br>
              tienes un credito de {$valor}<br>
              el total de tu deuda en {$tiempo} meses es: {$resultado}</p>";
    ?>
    <hr>
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>
