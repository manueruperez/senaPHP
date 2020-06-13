<?php
$velocidad = $_POST['velocidad'];
$tiempo =$_POST['tiempo'];
$distancia = (($velocidad*1000)*$tiempo)/3600;

echo "distancia: {$distancia}m" ;

?>