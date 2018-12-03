<?php
//incluir la cabecera
include"../cabecera.php";
	$matriz=array("Pedro","Ana",43,1);
	print"<h2>Visualizo con print_r</h2>\n<br/>";
	print_r($matriz);
	print"<h2>Visualizo con var_dump</h2>\n<br/>";
	var_dump($matriz);

?>
<br/>
   </body>
</html>