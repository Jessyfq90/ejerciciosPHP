<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 5_7 pagina 1</title>
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
		<h3>Botón de opción - Formulario</h3>
		<form action="pagina2.php" method="post">
			<fieldset>
				<legend>Indique su sexo</legend>
				<input type="radio" name="sexo" value="h" onKeyPress="return pulsar(event)">Hombre
				<input type="radio" name="sexo" value="m" onKeyPress="return pulsar(event)">Mujer<br/>
			</fieldset>
			<input type="submit" name="enviar" value="Enviar"/>
		</form>
	</body>
</html>