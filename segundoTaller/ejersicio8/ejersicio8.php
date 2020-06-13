<?php
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$convercion= 0;
$convercionNombre="";
switch ($tipo) {
    case "1":{
        $convercion= $cantidad/12;
        $convercionNombre = "meses a años son";
    };
        break;
    case "2":{
        $convercion= $cantidad*12;
        $convercionNombre = "años a meses son";
    }
        break;
    default:
        break;
}
echo "<a href='../index.html'><h1><-Regresar</h1></a>";
echo "<h1>convercion</h1><br><hr>" ;
echo "{$cantidad} {$convercionNombre} {$convercion} <br><br>" ;
?>