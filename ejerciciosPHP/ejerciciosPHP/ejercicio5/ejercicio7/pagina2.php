<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 5_7 pagina 2</title>
		<meta charset="utf-8"/>
        <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h3>Comprobar sexo - Resultado</h3>
		<?php
			if(!empty($_POST['sexo'])){
				$sexo=$_POST['sexo'];
				if($sexo == 'h'){
					print"Es un <span class='bueno'>Hombre</span>";
				}else if($sexo == 'm'){
					print"Es una <span class='bueno'>Mujer</span>";
				}
			}else{
				print"<span>No ha marcado su sexo.</span>";
			}
		?>
		<br/>
		<a href="pagina1.php">Volver al inicio</a>
	</body>
</html>