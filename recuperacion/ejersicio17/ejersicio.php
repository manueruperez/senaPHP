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
  <h2>Ejersicio17</h2>
  <hr>
  <?php
    $texto = $_POST['texto'];
    $conversion = $_POST['conversion'];
    function conversion($texto, $conversion){
      echo "<p>";
      switch ($conversion) {
        case '1':
          echo "".strtoupper($texto);
          break;
        case '2':
          echo "".strtolower($texto);
          break;
        case '3':
          echo "".ucwords($texto);
          break;
        default:
          # code...
          break;
      }
      echo "</p>";
    }
    conversion($texto, $conversion);

?>
    <hr>
    <img src="" alt="">
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>