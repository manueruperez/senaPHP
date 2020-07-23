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
  <h2>Ejersicio18</h2>
  <hr>
  <?php
    $filas = $_POST['filas'];
    $columnas = $_POST['columnas'];
    function conversion($filas, $columnas){
      echo "<table>";
      for ($i=1; $i <= $columnas ; $i++) {
        echo "<tr>";
        for ($j=1; $j <= $filas ; $j++) {
          $resultado = $i*$j;
          echo "<td>
            {$resultado}
          </td>";
        }
        echo"</tr>";
      }
      echo "</table>";
    }
    conversion($filas, $columnas);

?>
    <hr>
    <img src="" alt="">
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>