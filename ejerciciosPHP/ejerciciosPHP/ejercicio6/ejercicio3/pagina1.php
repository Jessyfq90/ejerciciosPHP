<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio6_3 pagina1</title>
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
		<h3>Datos personales - Formulario</h3>
		<form action="pagina2.php" method="post">
			<fieldset>
				<legend>Datos personales</legend>
				<p>Escriba los datos siguientes:</p>
				<fieldset>
					<label for="nombre">Nombre: </label>
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label for="apellidos"> Apellidos: </label>
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label for="edad">Edad:</label>
					<br/>
					<input type="text" name="nombre" value="" pattern="[a-zA-Z\sáéíóúñÑ-]{3,20}" required="required" title="de 3 a 20 letras, permitiendo espacios" size="15" onKeyPress="return pulsar(event)"/>*
					<input type="text" name="apellidos" value="" pattern="[a-zA-Z\sáéíóúñÑ-]{4,40}" required="required" onKeyPress="return pulsar(event)"/>*
					<select name="edad" id="edad" onKeyPress="return pulsar(event)">
						<option value="e0" name="edad" selected="selected"> </option>
						<option value="e1" name="edad">menos de 20 años </option>
						<option value="e2" name="edad">entre 20 y 39 años </option>
						<option value="e3" name="edad">entre 40 y 59</option>
						<option value="e4" name="edad">60 años o más </option>
					</select>
					<br/>
					<label for="peso">Peso: </label>
					&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label for="sexo"> Sexo: </label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label for="civil">Estado Civil:</label>
					<br/>
					<input type="text" name="peso" value="" size="5" onKeyPress="return pulsar(event)"/> &nbsp;kg
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="sexo" value="hombre" onKeyPress="return pulsar(event)"/>Hombre
					<input type="radio" name="sexo" value="mujer" onKeyPress="return pulsar(event)"/>Mujer
					&nbsp;&nbsp;&nbsp;
					<input type="radio" name="civil" value="soltero" onKeyPress="return pulsar(event)"/>Soltero
					<input type="radio" name="civil" value="casado" onKeyPress="return pulsar(event)"/>Casado
					<input type="radio" name="civil" value="otro" onKeyPress="return pulsar(event)"/>Otro
					<br/>
					<br/>
					<label for="aficiones">Aficiones: </label>&nbsp;
					<input type="checkbox" name="aficion[]" value="El cine" onKeyPress="return pulsar(event)"/>Cine &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="aficion[]" value="La literatura" onKeyPress="return pulsar(event)" />Literatura &nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="aficion[]" value="los tebeos" onKeyPress="return pulsar(event)"/>Tebeos
					<br/>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="aficion[]" value="el deporte" onKeyPress="return pulsar(event)"/>Deporte &nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="aficion[]" value="la música" onKeyPress="return pulsar(event)"/>Música &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" name="aficion[]" value="la televisión" onKeyPress="return pulsar(event)"/>Televisión
				</fieldset>
				<input type="submit" name="enviar" value="Enviar"/>
				<input type="reset" name="borrar" value="Borrar"/>
			</fieldset>

		</form>
	</body>
</html>