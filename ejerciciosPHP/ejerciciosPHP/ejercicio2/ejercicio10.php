<?php
include"../cabecera.php";
echo"       <h1>Ejercicio 10</h1>\n";

function existe_fecha($dia,$mes,$anio){
    if(checkdate($mes, $dia, $anio)){
        echo"       <p>el dia $dia/$mes/$anio existe.</p>\n";
    }else{
        echo"       <p>el dia $dia/$mes/$anio NO existe.</p>\n";
    }
}

$dia=29;
$mes=2;
$anio=2008;
existe_fecha($dia, $mes, $anio);
$anio=2009;
existe_fecha($dia, $mes, $anio);
?>
   </body>
</html>