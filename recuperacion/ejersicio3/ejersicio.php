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
        $fechaActual = strtotime(date('y-m-d'));
        $fechaUsuario=  strtotime($_REQUEST["fecha"]);
        $nota1= $_REQUEST["nota1"];
        $nota2= $_REQUEST["nota2"];
        $nota3 = $_REQUEST["nota3"];
    // echo "<p>{$nombres} con identificacion {$fechaUsuario} tu salario es de: {$fechaActual}</p>";
    echo "Difference between two dates: "
    . ($fechaActual - $fechaUsuario)/60/60/24; 
    ?>
    <hr>
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>
