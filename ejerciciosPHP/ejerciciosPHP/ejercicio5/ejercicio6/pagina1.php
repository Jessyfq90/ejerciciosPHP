<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio 5_6 pagina 1</title>
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
		<h3>Adivinar número - Formulario</h3>
		<form action="pagina2.php" method="post">
			<fieldset>
				<legend>Formulario</legend>
				Intenta adivinar que número ha generado:<br/>
				<table>
					<tr>
						<td>Introducir número (entre 1 y 10)</td>
						<td><input type="text" name="numero" id="numero" pattern="[0-9]{1,2}" value="" onKeyPress="return pulsar(event)"/></td>
					</tr>
				</table>
				<input type="submit" name="comprobar" value="Comprobar"/>
			</fieldset>
		</form>
	</body>
</html>