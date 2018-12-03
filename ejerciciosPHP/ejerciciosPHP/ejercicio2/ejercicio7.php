<?php
include"../cabecera.php";
include"indice_masa_corporal.php";
echo"       <h1>Ejercicio 7</h1>\n";
$altura=167;//en centimetros
$peso=70;//en kilogramos
$resultado=indice_masa_corporal($peso, $altura);
echo"       El indice de masa corporal para un peso de $peso kg y una altura de $altura cm es $resultado\n";
?>
   </body>
</html>