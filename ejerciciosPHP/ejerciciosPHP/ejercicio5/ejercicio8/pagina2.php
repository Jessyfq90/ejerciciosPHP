<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 5_8 pagina 2</title>
		<meta charset="utf-8"/>
        <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h3>Casillas de verificación - Resultado</h3>
		<?php
			if(!empty($_POST['aficion'])){
				$aficiones=$_POST['aficion'];
				print"Le gusta:\n";
				print"          <ol>\n";
				foreach($aficiones as $aficion){
					print"             <li><span class='bueno'>$aficion</span></li>\n";
				}
				print"          </ol>\n";
			}else{
				print"<span>No ha marcado una afición</span>";
			}
		?>
        <br/>
		<a href="pagina1.php">Volver al formulario</a>
	</body>
</html>