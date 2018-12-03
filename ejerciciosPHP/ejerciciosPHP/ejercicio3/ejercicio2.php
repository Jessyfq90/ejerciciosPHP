<?php
//incluir la cabecera
include"../cabecera.php";
	$v[1]=90;
	$v[30]=7;
	$v['e']=99;
	$v['hola']=43;
	foreach($v as $indice => $valor){
		echo" indice: $indice - valor: $valor<br/>\n";
	}
?>
<br/>
   </body>
</html>