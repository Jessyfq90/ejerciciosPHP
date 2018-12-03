<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 5_6 pagina 2</title>
		<meta charset="utf-8"/>
        <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h3>Adivinar número - Resultado</h3>
		<?php
			if(!empty($_POST['numero'])){
				$numero=$_POST['numero'];
				//print"El numero introducido es: $numero";
				if(($numero>0)&&($numero<11)){
					$creado=rand(1,10);
					if($numero==$creado){
						print"Yo pense el número $creado. Acertaste";
					}else if($numero<$creado){
						print"El número $numero Fue muy pequeño<br/>";
						print"Yo pense el número $creado. Lo siento";
					}else if($numero>$creado){
						print"El número $numero Fue muy grande<br/>";
						print"Yo pense el número $creado. Lo siento";
					}
				}else{
					print"<span>El número debe estar entre 1 y 10</span>";
				}
			}else{
				print"<span>Debe introducir un número</span>";
			}
		?>
		<br/>
		<a href="pagina1.php">Volver al inicio</a>
	</body>
</html>