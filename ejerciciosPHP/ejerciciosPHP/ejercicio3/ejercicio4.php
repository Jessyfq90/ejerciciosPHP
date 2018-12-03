<?php
//incluir la cabecera
include"../cabecera.php";
	$array=["Nombre"=>"Pedro Torres", "Dirección"=>"C/Mayor 37", "Teléfono"=>123456789];
	foreach($array as $indice =>$valor){
		if($indice == "Teléfono"){
			print"\n<br/>";
		}
		print"$indice: $valor ";
	}
?>
<br/>
   </body>
</html>