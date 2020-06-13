<?php
$figura = $_POST['figura'];
const pi= 3.1416;
const lado= 2;
const base= 2;
const altura= 2;
const radio= 2;
$area= 0;
$figuraNombre="";
switch ($figura) {
    case "1":{
        $area= lado*lado;
        $figuraNombre = "cuadrado";
    };
        break;
    case "2":{
        $area= base*altura;
        $figuraNombre = "rectangulo";
    }
        break;
    case "3":{
        $area= (base*altura)/2;
        $figuraNombre = "triangulo";
    }
        break;
    case "4":{
        $area= pi*pow(radio,2);
        $figuraNombre = "circulo";
    }
        break;
    default:
        break;
}
echo "<a href='../index.html'><h1><-Regresar</h1></a>";
echo "<h1>Area</h1><br><hr>" ;
echo "area {$figuraNombre}: {$area} <br><br>" ;
?>