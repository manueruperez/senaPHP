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
        $salario = $_POST['salario'];
        $diurnas = $_POST['diurnas'];
        $nocturnas = $_POST['nocturnas'];
        $valorHora = $salario/160;
        $horaDiurna = ($valorHora*105)/100;
        $horaNocturna = ($valorHora*110)/100;
        $salarioTotal = $salario + ($diurnas*$horaDiurna) + ($nocturnas*$horaNocturna);
    echo "<p>Trabajando 160 horas mensuales tu hora vale: {$valorHora}<br>
             Tu hora extra diurna vale: {$horaDiurna}<br>
             Tu hora extra nocturna vale: {$horaNocturna}<br>
             Tu salario total es de : {$salarioTotal}
          </p>";
    ?>
    <hr>
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>
