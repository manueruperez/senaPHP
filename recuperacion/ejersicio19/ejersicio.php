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
  <h2>Ejersicio19</h2>
  <hr>
  <?php
    $numero1 = $_POST['numero1'];
    function conversion($numero1){
      $resultado=0;
      for ($i=1; $i <=$numero1 ; $i++) {
        if($i%2!=0){
          $resultado= $resultado+$i;
        }
      }
      echo "<p>{$resultado}</p>";
    }
    conversion($numero1);
?>
    <hr>
    <img src="" alt="">
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>