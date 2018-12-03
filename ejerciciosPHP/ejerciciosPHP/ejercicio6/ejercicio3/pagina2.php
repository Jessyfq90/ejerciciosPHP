<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio6_3 pagina2</title>
		<meta charset="utf-8"/>
        <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h3>Datos personales - Resultado</h3>
		<?php
			//NOMBRE
			$nombre=$_POST['nombre'];
			print"Su nombre es $nombre<br/>";
			//APELLIDOS
			$apellidos=$_POST['apellidos'];
			print"Sus apellidos son $apellidos<br/>";
			//EDAD
			$edad=$_POST['edad'];
			if($edad == "e0"){
				print"No ha indicado su edad<br/>";
			}else if($edad == "e1"){
				print"Tiene menos de 20 años<br/>";
			}else if($edad == "e2"){
				print"Tiene entre 20 y 39 años<br/>";
			}else if($edad == "e3"){
				print"Tiene entre 40 y 59 años<br/>";
			}else if($edad == "e4"){
				print"Tiene 60 años o más<br/>";
			}
			//PESO
			if(empty($_POST['peso'])){
				print"<span>No ha introducido su peso</span><br/>";
			}else if(!empty($_POST['peso'])){
				$peso=$_POST['peso'];
				$noNumero=0;
				for($i=0;$i<strlen($peso);$i++){
					if(ord($peso[$i])<48 ||ord($peso[$i])>57){
						$noNumero=1;
						break;
					}
				}
				if($noNumero==0){//solo son numeros
					print"Pesa $peso kg<br/>";
				}else{//existen caracteres k no son numeros
					print"<span>No ha escrito su peso como número</span><br/>";
				}
			}
			//SEXO
			if(empty($_POST['sexo'])){
				print"<span>No ha seleccionado su sexo</span><br/>";
			}else if(!empty($_POST['sexo'])){
				$sexo=$_POST['sexo'];
				if($sexo=="hombre"){
					print"Es un hombre<br/>";
				}else if($sexo=="mujer"){
					print"Es una mujer<br/>";
				}
			}
			//ESTADO CIVIL
			if(empty($_POST['civil'])){
				print"<span>No ha seleccionado su estado civil</span><br/>";
			}else if(!empty($_POST['civil'])){
			    $civil=$_POST['civil'];
				print"Su estado civil es $civil<br/>";

			}
			//AFICIONES
			if(!empty($_POST['aficion'])){
			    $aficiones=$_POST['aficion'];
			    print"Sus aficiones son: ";
			    foreach($aficiones as $aficion){
			        print"$aficion, ";
			    }
			}else{
			    print"<span>No ha marcado una afición</span>";
			}
		?>
    <br/>
		<a href="pagina1.php">Volver al formulario</a>
	</body>
</html>