<?php
include"../cabecera.php";
include"ejercicio3.php";
echo"       <h1>Ejercicio 8</h1>\n";
$num1=mt_rand(1,100);
$num2=mt_rand(1,100);
$resultado=mayor($num1, $num2);
echo"       el número mayor de $num1 y $num2 es $resultado\n";
?>
   </body>
</html>