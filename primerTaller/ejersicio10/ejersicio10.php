<?php
$año = $_POST['año'];
$msg="";
if($año%4==0 AND $año%100!=0){
    $msg = "es biciesto";
}else{
    $msg = "no es biciesto";
}
echo "<a href='../../index.html'><h1><-Regresar</h1></a>";
echo "<h1>año biciesto</h1><br><hr>" ;
echo "{$año} {$msg}<br><br>" ;
?>