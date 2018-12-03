<?php
include"../cabecera.php";
echo"       <h1>Ejercicio 6</h1>\n";
function tabla4($c1,$c2,$c3,$c4){
    echo"<table border='1px solid black'>\n";
    echo"   <tr>\n";
    echo"       <td>$c1</td>\n";
    echo"   </tr>\n";
    echo"   <tr>\n";
    echo"       <td>$c2</td>\n";
    echo"   </tr>\n";
    echo"   <tr>\n";
    echo"       <td>$c3</td>\n";
    echo"   </tr>\n";
    echo"   <tr>\n";
    echo"       <td>$c4</td>\n";
    echo"   </tr>\n";
    echo"</table>\n";
}
$cad1="hola";
$cad2="buenos días";
$cad3="buenas tardes";
$cad4="buenas noches";
$resultado=tabla4($cad1,$cad2,$cad3,$cad4);
echo"       $resultado\n";
?>
   </body>
</html>