<?php
include"../cabecera.php";
echo"       <h1>Ejercicio 9</h1>\n";
function esBisiesto($anio){
    if($anio%4==0){//es divisible por 4
        $es=true;
    }elseif($anio%100==0){
        if($anio%4==0){
            $es=true;
        }
    }else{
        $es=false;
    }
    return $es;
}
$resultado=esBisiesto(2008);
if($resultado)
    $result="si";
else
    $result="no";
echo"       el anio 2008 $result es bisiesto\n";
?>
   </body>
</html>