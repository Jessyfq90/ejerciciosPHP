<?php
//incluir la cabecera
include"../cabecera.php";

	for($i=0;$i<10;$i++){
		$enteros[]=$i;
	}

	$suma=0;
	$cont=0;
	foreach($enteros as $indice => $valor){
		if($valor%2==0){
			$suma+=$valor;
			$cont+=1;
		}else{
			print"valor posición impar $indice: $valor<br/>\n";
		}
	}
	$media=$suma/$cont;
	print"La media es: $media";
?>
<br/>
   </body>
</html>
