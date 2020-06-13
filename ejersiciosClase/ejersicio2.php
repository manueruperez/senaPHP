<?php

$valor = $_POST['valor'];
$cuotas = $_POST['cuotas'];
$interes = $_POST['interes'];
$total = ($productVal*$iva)+($productVal*$interes);
echo "<a href='../../index.html'><h1><-Regresar</h1></a>";
echo "<div>";
    echo "Valor del crédito: $vrvalorcre<br >";
    echo "Número de cuotas : $vrnumcuotas<br >";
    echo "Tasa de interés  :".number_format($vrtasaint,2)."</br>";
    echo "Valor de la cuota : $vrvalorcuo<br />";
    echo "</div>";
    echo "<table>";
    echo "<tr>";
    echo "<th>No.</th>";
    echo "<th>Valor cuota</th>";
    echo "<th>Valor interes</th>";
    echo "<th>Valor pagar</th>";
    echo "<th>Saldo</th>";
    echo "</tr>";
?>