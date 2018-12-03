<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 5_8 pagina 1</title>
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
		<h3>Casillas de verificación - Formulario</h3>
		<form action="pagina2.php" method="post">
			<fieldset>
				<legend>Indique sus aficiones</legend>
				Aficiones:
				<input type="checkbox" name="aficion[]" value="El cine" onKeyPress="return pulsar(event)">Cine
				<input type="checkbox" name="aficion[]" value="La literatura" onKeyPress="return pulsar(event)">Literatura
				<input type="checkbox" name="aficion[]" value="La música" onKeyPress="return pulsar(event)">Música
				<br/>
				<input type="submit" name="enviar" value="Enviar"/>
			</fieldset>
		</form>
	</body>
</html>