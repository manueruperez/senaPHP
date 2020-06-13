<?php
if (isset($_REQUEST["btn_calcular"])) {// declarar variables dentro del if
    $nombre= $_REQUEST["txt_nombre"];
    $asignatura= $_REQUEST["txt_asignatura"];
    $nota1= $_REQUEST["txt_nota1"];
    $nota2= $_REQUEST["txt_nota2"];
    $nota3= $_REQUEST["txt_nota3"];
    $notaFinal=($nota1*0.3)+($nota2*0.3)+($nota3*0.4); //preguntar sobre floatval
    if ($notaFinal>3.5) {
        echo "<a href='../../index.html'><h1><-Regresar</h1></a>  el estudiante {$nombre} aprobó la Asignatura <p>";    // code...
    }else {
        echo "<a href='../../index.html'><h1><-Regresar</h1></a>el estudiante {$nombre} reprobó la Asignatura <p>";    // code...
    }
}
echo " {$nombre} su nota definitiva en {$asignatura} es  ".$notaFinal;
?>