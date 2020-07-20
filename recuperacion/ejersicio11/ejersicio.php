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
        $minutos = $_POST['minutos'];
        $costo = 0;
        switch ($minutos) {
          case ($minutos>0 AND $minutos<=5):
            $costo = $minutos * 50;
            break;
          case ($minutos>5 AND $minutos<=10):
            $costo = $minutos * 40;
            break;
          case ($minutos>10 AND $minutos<=20):
            $costo = $minutos * 30;
            break;
          case ($minutos>20):
            $costo = $minutos * 25;
            break;
          default:
            # code...
            break;
        }
    echo "<p>Valor de la llamada {$costo}<br>
          </p>";
    ?>
    <hr>
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>
