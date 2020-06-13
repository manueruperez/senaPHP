<?php
$fecha = date('Y-m-d H:i:s');
$iva = 1.19;
$interes = 0.015;
$cliente = $_POST['cliente'];
$producto = $_POST['products'];
$productVal=0;
$productName="";
$cuotas = $_POST['cuotas'];
switch ($producto) {
    case "1":{
        $productVal= 1000000;
        $productName='producto 1';
    };
        break;
    case "2":{
        $productVal= 2000000;
        $productName='producto 2';
    }
        break;
    case "3":{
        $productVal= 3000000;
        $productName='producto 3';
    }
        break;
    case "4":{
        $productVal= 4000000;
        $productName='producto 4';
    }
        break;
    default:
        break;
}

$valCuota = ($productVal*$iva)/$cuotas;
$total = ($productVal*$iva)+($productVal*$interes);
echo "<a href='../index.html'><h1><-Regresar</h1></a>";
echo "<h1>factura</h1><br><hr>" ;
echo "fecha: {$fecha}<br><br>" ;
echo "nombre cliente: {$cliente}<br><br>" ;
echo "producto: producto {$producto}<br><br>" ;
echo "cuotas: {$cuotas}<br><br>" ;
echo "valor cuota: {$valCuota}<br><br>" ;
echo "toal: {$total}<br><br>" ;
?>