<?php
include"../cabecera.php";
$m=array("café","harina","carne","vegetales","zumo","pasta");
echo"<h2>Visualizo con var_dump()</h2>";
var_dump($m);
echo"<h2>Visualizo con print_r()</h2>";
print_r($m);
//Ordenamos el array
asort($m);
//ordenamos array orden inverso
arsort($m);
//visualizamos las claves
echo"<h2>Visualizo las claves</h2>";

print_r(array_keys($m));

//visualizamos elemento actual
echo"<h2>Visualizo elemento actual</h2>";
print"<p> ".current($m)." </p>";

//avanzamos puntero
next($m);
next($m);

//Visualizamos key
echo"<h2>Visualizo key</h2>";
print key($m);
?>
   </body>
</html>