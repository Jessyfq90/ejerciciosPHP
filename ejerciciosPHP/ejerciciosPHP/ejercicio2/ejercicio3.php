<?php
include"../cabecera.php";
echo"       <h1>Ejercicio 3</h1>\n";
function mayor($num1,$num2){
    if($num1>$num2){
        $mayor=$num1;
    }elseif ($num2>$num1){
        $mayor=$num2;
    }else{
        //no haría falta porque son iguales
        $mayor=$num1;
    }
    return $mayor;
}
$n1=3;
$n2=7;
$numero=mayor($n1,$n2);
echo"       El numero mayor de $n1 y $n2 es: $numero\n";
?>
    </body>
</html>