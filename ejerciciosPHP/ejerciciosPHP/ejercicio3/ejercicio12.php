<?php
//incluir la cabecera
include"../cabecera.php";
			$deportes=array("fútbol","baloncesto","natación","tenis");
			print"       Los deportes son: <br/>\n";
			print"       <ul>\n";
			for($i=0;$i<count($deportes);$i++){
				print"          <li>$deportes[$i] </li>\n";
			}
			print"       </ul>\n";
			$numValores=count($deportes);
			print"       El array tiene $numValores valores<br/>";

			//adelanto posición y muestro posición actual
			next($deportes);
			$actual=current($deportes);
			print"El valor del indice actual es $actual<br/>";
			//adelanto posición y muestro posición actual
			next($deportes);
			$actual=current($deportes);
			print"\n       Avanzo una posición y el valor del indice actual es $actual<br/>";
			//situo el puntero al final y muestro el valor
			end($deportes);
			$actual=current($deportes);
			print"\n       Sitúo el puntero al final del array y el valor del indice actual es $actual<br/>";
?>
       <br/>
   </body>
</html>