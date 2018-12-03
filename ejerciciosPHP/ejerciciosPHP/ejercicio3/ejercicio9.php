<?php
//incluir la cabecera
include"../cabecera.php";

	$animales=["Lagartija","Araña","Perro","Gato","Ratón"];
	$numeros=[12,34,45,52,12];
	$combi=["Sauce","Pino","Naranjo","Chopo","Perro",34];
	$resultado=array_merge($animales,$numeros,$combi);
	print"<h2>Array en orden directo</h2><br/>\n";
	print_r($resultado);
	arsort($resultado);
	print"<h2>Array en orden inverso</h2><br/>\n";
	print_r($resultado);
?>
<br/>
   </body>
</html>
