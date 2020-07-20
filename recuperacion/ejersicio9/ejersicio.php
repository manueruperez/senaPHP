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
  <h2>Ejersicio7</h2>
  <hr>
    <?php
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $suma1 = $numero3 + $numero2;
        $suma2 = $numero3 + $numero1;
        $suma3 = $numero1 + $numero2;
        $msg = "Diferentes";
        if($suma1 == $numero1){
          $msg = "Iguales";
        }
        if($suma2 == $numero2){
          $msg = "Iguales";
        }
        if($suma3 == $numero3){
          $msg = "Iguales";
        }
    echo "<p>{$msg}</p>";
    ?>
    <hr>
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>
