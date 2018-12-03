<?php
//incluir la cabecera
include"../cabecera.php";

	$animales=["Lagartija","Araña","Perro","Gato","Ratón"];
	$numeros=[12,34,45,52,12];
	$combi=["Sauce","Pino","Naranjo","Chopo","Perro",34];
	$resultado=array_merge($animales,$numeros,$combi);
	print_r($resultado);

?>
<br/>
   </body>
</html>