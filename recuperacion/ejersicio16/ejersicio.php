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
  <h2>Ejersicio15</h2>
  <hr>
  <?php
    $documento = $_POST['documento'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $valor = $_POST['valor'];
    $fecha = $_POST['fecha'];
    function credito($documento,$nombres,$apellidos,$valor,$fecha){
      echo "<p>";
      echo "".strtoupper($nombres)." ".strtoupper($apellidos);
      echo "</p>";
        if($valor>5000000){
            $intereses=$valor*0.015;
            echo "Para un capital de $$valor los intereces son $$intereses <br>";
        }else{
            $intereses=$valor*0.02;
            echo "Para un capital de $$valor los intereces son $$intereses <br>";
        }
        $fecha=date("d-m-Y",strtotime($fecha."+ 30 days"));
        echo "<h3> Proximo pago $fecha </h3>";
    }
    credito($documento,$nombres,$apellidos,$valor,$fecha);

?>
    <hr>
    <img src="" alt="">
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>