<!DOCTYPE html>
<html>
<head>
		<title>Ejercicio7_1 pagina1</title>
		<meta charset="utf-8"/>
        <link href='../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
        <script>
        function pulsar(e){
            tecla = (document.all) ? e.keyCode :e.which;
            return tecla!=13;
        }
      </script>
	</head>
	<body>
		<h3>RECETAS DE COCINA</h3>
		<form action="pagina2.php" method="post">
			<label for="numero">Escriba el número de ingredientes:</label>
			<input type="number" name="numero" value="" onKeyPress="return pulsar(event)"/>
			<br/>
			<input type="submit" value="Enviar" name="enviar"/>
		</form>

	</body>
</html>