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
  <h2>Ejersicio13</h2>
  <hr>
    <?php
      $numero = $_POST['numero'];
      echo "<p> tabla con ciclo for</p>";
      echo "<table>";
      for ($i=1; $i <10 ; $i++) { 
        $resultado = $i*$numero;
        echo "<tr>
          <td>
            {$i}x{$numero}
          </td>
          <td>
            {$resultado}
          </td>
        </tr>";
      }
      echo "</table>
      <hr>";
      echo "<p> tabla con ciclo while</p>";
      echo "<table>";
      $i = 1;
      while($i <10){
        $resultado = $i*$numero;
        echo "<tr>
          <td>
            {$i}x{$numero}
          </td>
          <td>
            {$resultado}
          </td>
        </tr>";
        $i++;
      }
      echo "</table>
      <hr>";
      echo "<p> tabla con ciclo do while</p>";
      echo "<table>";
      $i = 1;
      do{
          $resultado = $i*$numero;
          echo "<tr>
            <td>
              {$i}x{$numero}
            </td>
            <td>
              {$resultado}
            </td>
          </tr>";
          $i++;
      }while($i <10);
      echo "</table>";
    ?>
    <hr>
    <a href='ejersicio.html'><h1><-Regresar al formulario</h1></a>
    <a href='../../index.html'><h1><-Regresar al inicio</h1></a>
  </div>
  </body>
</html>
