<?php
//incluir la cabecera
include"../cabecera.php";
	$estadios_futbol=array('Barcelona'=>'Camp Nou','Real Madrid'=>'Santiago Bernabeu','Valencia'=>'Mestalla','Real Sociedad'=>'Anoeta');
			print"       <table>\n";
			print"           <tr>
			     <td>Equipo</td>
			     <td>Estadio</td>
		   </tr>\n";
			foreach($estadios_futbol as $indice => $valor){
			print"           <tr>
				<td>$indice</td>
				<td>$valor</td>
		   </tr>\n";
			}
			print"       </table>";
			//eliminamos el Real madrid
			print"\n       <p>Eliminamos el Real Madrid del array</p>";
			unset($estadios_futbol['Real Madrid']);
			print"\n       <table>\n";
			print"           <tr>
				<td>Equipo</td>
				<td>Estadio</td>
		   </tr>\n";
			foreach($estadios_futbol as $indice => $valor){
					print"           <tr>
				<td>$indice</td>
				<td>$valor</td>
		   </tr>\n";
			}
			print"       </table>\n";
?>
       <br/>
   </body>
</html>