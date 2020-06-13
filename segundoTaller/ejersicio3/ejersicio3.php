<?php
$primero = $_POST['primero'];
$segundo = $_POST['segundo'];
$tercero = $_POST['tercero'];
$cuarto = $_POST['cuarto'];
$quinto = $_POST['quinto'];
$resultado = 0;
$puntos1 = 0;
$puntos2 = 0;
$puntos3 = 0;
$puntos4 = 0;
$puntos5 = 0;




switch($primero){
    case 4:{
        $resultado=$resultado+4;
        $puntos1 = 4;
    };
    break;
    case null:{
        $resultado=$resultado-1;
        $puntos1 = -1;;
    };
    break;
    default:{
        $resultado=$resultado-3;
        $puntos1 = -3;
    };
}
switch($segundo){
    case 72:{
        $resultado=$resultado+4;
        $puntos2 = 4;
    };
    break;
    case null:{
        $resultado=$resultado-1;
        $puntos2 = -1;;
    };
    break;
    default:{
        $resultado=$resultado-3;
        $puntos2 = -3;
    };
}
switch($tercero){
    case "popayan":{
        $resultado=$resultado+4;
        $puntos3 = 4;
    };
    break;
    case "":{
        $resultado=$resultado-1;
        $puntos3 = -1;;
    };
    break;
    default:{
        $resultado=$resultado-3;
        $puntos3 = -3;
    };
}
switch($cuarto){
    case "canberra":{
        $resultado=$resultado+4;
        $puntos4 = 4;
    };
    break;
    case "":{
        $resultado=$resultado-1;
        $puntos4 = -1;;
    };
    break;
    default:{
        $resultado=$resultado-3;
        $puntos4 = -3;
    };
}
switch($quinto){
    case 2:{
        $resultado=$resultado+4;
        $puntos5 = 4;
    };
    break;
    case null:{
        $resultado=$resultado-1;
        $puntos5 = -1;;
    };
    break;
    default:{
        $resultado=$resultado-3;
        $puntos5 = -3;
    };
}

echo "<a href='../index.html'><h1><-Regresar</h1></a>";
echo "<h1>Resultado</h1><br><hr>" ;
echo "1)¿cuanto es 2+2?<br> R: 4<br> tu respuesta:{$primero}<br>puntos {$puntos1}<br><br>" ;
echo "2)¿cuanto es 8*9?<br> R: 72<br> tu respuesta:{$segundo}<br>puntos {$puntos2}<br><br>" ;
echo "3)¿cual es la capital del cauca?<br> R: popayan<br> tu respuesta:{$tercero}<br>puntos {$puntos3}<br><br>" ;
echo "4)¿cual es la capital<br> de australia? R: canberra<br> tu respuesta:{$cuarto}<br>puntos {$puntos4}<br><br>" ;
echo "5)¿cuanto es 4/2?<br> R: 2<br> tu respuesta:{$quinto}<br>puntos {$puntos5}<br><br>" ;
echo "<hr><h1>total</h1><br>{$resultado}" ;
?>