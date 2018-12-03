<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio6_1 pagina2</title>
		<meta charset="utf-8"/>
        <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h3>Pedido cuadernos - Resultado</h3>
		<?php
			if(!empty($_POST['cuadernos'])){
				$letra=0;
				$cuaderno=$_POST['cuadernos'];
				for($i=0;$i<strlen($cuaderno);$i++){
					if(ord($cuaderno[$i])<48 || ord($cuaderno[$i])>57){
						$letra=1;
						break;
					}
				}
				if($letra==0){//solo hay numeros en $cuaderno
					$precio;
					if($cuaderno<10){
						$precio=$cuaderno*2;
					}else if($cuaderno < 30){
						$precio=$cuaderno*1.5;
					}else{
						$precio=$cuaderno;
					}
					print"El precio asciende a $precio €";
				}else{//Hay algún caracter que no corresponde a un numero
					print"<span>Cantidad errónea</span>";
				}
			}else{
				print"<span>Faltan datos</span>";
			}
		?>
		<br/>
		<a href="pagina1.php">Volver al inicio</a>
	</body>
</html>