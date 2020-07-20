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
       $figura = $_POST['figura'];
       const pi= 3.1416;
       const lado= 2;
       const base= 2;
       const altura= 2;
       const radio= 2;
       $area= 0;
       $figuraNombre="";
       switch ($figura) {
           case "1":{
               $area= lado*lado;
               $figuraNombre = "cuadrado";
           };
               break;
           case "2":{
               $area= base*altura;
               $figuraNombre = "rectangulo";
           }
               break;
           case "3":{
               $area= (base*altura)/2;
               $figuraNombre = "triangulo";
           }
               break;
           case "4":{
               $area= pi*pow(radio,2);
               $figuraNombre = "circulo";
           }
               break;
           default:
               break;
       }
       echo "area {$figuraNombre}: {$area} <br><br>" ;
    ?>
    <hr>
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>
