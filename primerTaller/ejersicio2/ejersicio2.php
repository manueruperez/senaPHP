<?php
$velocidad = $_POST['velocidad'];
$tiempo =$_POST['tiempo'];
$distancia = (($velocidad*1000)*$tiempo)/3600;
echo "<a href='../../index.html'><h1><-Regresar</h1></a>";    // code...
echo "distancia: {$distancia}m" ;

?>