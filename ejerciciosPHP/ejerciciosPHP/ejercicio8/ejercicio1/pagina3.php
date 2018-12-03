<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio8_1 pagina2</title>
		<meta charset="utf-8"/>
        <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h3>TABLA CON CASILLAS DE VERIFICACIÓN - PASO2</h3>
      <?php
      if(!empty($_POST['numero'])){
        $casillas=$_POST['numero'];
        $longitud=count($casillas);
        $numCasillas=$_POST['casillas'];
        print"Has marcado $longitud casillas de un total de $numCasillas: ";
        foreach($casillas as $casilla){
            print"$casilla, ";
        }

      }else if(empty($_POST['numero'])){
          print"<span>No has seleccionado ninguna casilla</span>";
      }
      ?>
      <br/>
      <a href="pagina1.php">Volver al inicio</a>
	</body>
</html>