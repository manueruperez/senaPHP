<?php
$pesos = $_POST['pesos'];
$divisa = $_POST['divisa'];
$euro = 0.00023;
$dolar = 0.00026;
$convercion= 0;
$divisaNombre="";
switch ($divisa) {
    case "1":{
        $convercion= $pesos*$euro;
        $divisaNombre = "euros";
    };
        break;
    case "2":{
        $convercion= $pesos*$dolar;
        $divisaNombre = "dolares";
    }
        break;
    default:
        break;
}
echo "<a href='../index.html'><h1><-Regresar</h1></a>";
echo "<h1>convercion</h1><br><hr>" ;
echo "toal: {$convercion} {$divisaNombre}<br><br>" ;
?>