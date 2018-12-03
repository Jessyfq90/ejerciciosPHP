<?php
//incluir la cabecera
include"../cabecera.php";
	$cont=0;
	for($i=0;$cont<10;$i++){
		if($i%2==0){
			$matriz[]=$i;
			$cont++;
		}
	}
	foreach($matriz as $indice => $valor){
		if($indice != ($cont-1)){
			print "$valor - ";
		}else{
			print "$valor";
		}
	}
?>
   <br/>
   </body>
</html>