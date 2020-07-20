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
  <h2>Ejersicio12</h2>
  <hr>
    <?php
        $numero = $_POST['numero'];
        $suma = 0;
        $contador = 1;
        while($contador <= $numero){
          $suma = $suma + $contador;
          $contador ++;
        }
    echo "<p>Resultado: {$suma}<br>
          </p>";
    ?>
    <hr>
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>
