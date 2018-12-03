<?php
//incluir la cabecera
include"../cabecera.php";
		function letraDni($num){
			if(is_int($num)){
				$longitud=strlen($num);
				if($longitud == 8){
					$letras=array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
					$indice = $num %23;
					$letra=$letras[$indice];
					print"     La letra del dni $num es $letra";
				}else{
					print"<span>El número no tiene 8 dígitos </span>";
				}
			}else{
				print"<span>no es un numero entero </span>";
			}
		}
		$numero=23456781;
		$numero1=71673586;
		letraDni($numero1);

?>
       <br/>
   </body>
</html>
