<?php
//incluir la cabecera
include"../cabecera.php";
			$familias=array("simpson"=>array("padre"=>"homer","madre"=>"Marge","hijos"=>array("Bart","Lisa","Maggie")),
							"griffin"=>array("padre"=>"Peter","madre"=>"Louis","hijos"=>array("Chris","Meg","Stewie")));
			function recorrerArray($matriz){
				foreach($matriz as $indice => $valor){
					print"     $indice: ";
					if(is_array($valor)){
						print"<br/>\n";
						recorrerArray($valor);
					}else{
						print"$valor<br/>\n";
					}
				}
			}

			recorrerArray($familias);

?>
       <br/>
   </body>
</html>
