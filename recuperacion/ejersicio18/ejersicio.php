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
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];
    function conversion($numero1, $numero2, $operacion){
      $resultado;
      echo "<p>";
      switch ($operacion) {
        case '1':
          $resultado = $numero1 + $numero2;
          echo "{$resultado}";
          break;
        case '2':
          $resultado = $numero1 - $numero2;
          echo "{$resultado}";
          break;
        case '3':
          $resultado = $numero1 * $numero2;
          echo "{$resultado}";
          break;
        case '3':
          $resultado = (($numero1)/($numero2));
          echo "{$resultado}";
          break;
        default:
          # code...
          break;
      }
      echo "</p>";
    }
    conversion($numero1, $numero2, $operacion);

?>
    <hr>
    <img src="" alt="">
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>