<?php
//incluir la cabecera
include"../cabecera.php";
	$ciudades=array("Madrid","Barcelona","Londres","New York","Los Ángeles","Chicago");
	foreach($ciudades as $indice => $valor){
		echo"La ciudad con el índice $indice tiene de nombre: $valor<br/>\n";
	}
?>
<br/>
   </body>
</html>