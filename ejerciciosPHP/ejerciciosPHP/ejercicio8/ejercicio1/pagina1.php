<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio8_1 pagina1</title>
		<meta charset="utf-8"/>
        <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
	    <script>
            function pulsar(e){
                tecla = (document.all) ? e.keyCode :e.which;
                return tecla!=13;
            }
      </script>
    </head>
	<body>
		<h3>TABLA CON CASILLAS DE VERIFICACIÓN</h3>
		<p>Escribe un número y dibujaré una tabla cuadrada de ese tamaño con casillas de verificación en cada casilla.</p>
		<form action="pagina2.php" method="post">
			<fieldset>
				<label for="numero">Tamaño</label>
				<input type="number" name="numero" value="" minlength="2" onKeyPress="return pulsar(event)"/>

				<input type="submit" name="dibujar" value="Dibujar"/>
			</fieldset>
		</form>
	</body>
</html>