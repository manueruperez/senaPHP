<?php
$primero = $_POST['hombres'];
$segundo = $_POST['mujeres'];
$hombres = ($primero*100)/($primero + $segundo);
$mujeres = ($segundo*100)/($primero + $segundo);

echo "<a href='../index.html'><h1><-Regresar</h1></a>";
echo "<h1>Resultado</h1><br><hr>" ;
echo "cantidad hombres: {$hombres}%<br><br>" ;
echo "cantidad mujeres: {$mujeres}%<br><br>" ;
?>