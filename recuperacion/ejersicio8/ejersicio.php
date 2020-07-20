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
        $msg = "";
        if($numero1%$numero2==0){
          $msg = "es divisor";
        }else{
          $msg = "no es divisor";
        }
    echo "<p>El {$numero1} {$msg} {$numero2}</p>";
    ?>
    <hr>
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>
