<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio6_1 pagina1</title>
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
		<h3>LISTA DE PRECIOS</h3>
		<table>
			<tr>
				<th>Cantidad</th>
				<th>Precio Unidad</th>
			</tr>
			<tr>
				<td>menos de 10</td>
				<td>2 €</td>
			</tr>
			<tr>
				<td>entre 10 y 30</td>
				<td>1.5 €</td>
			</tr>
			<tr>
				<td>más de 30</td>
				<td>1 €</td>
			</tr>
		</table>
		<br/>
		Seleccione la cantidad a pedir según nuestras tarifas:
		<br/>
		<form action="pagina2.php" method="post">
			<fieldset>
				<legend>Datos pedido</legend>
				<label for="cuadernos">Número de cuadernos: </label>
				<input type="text" size="4" name="cuadernos" value="" onKeyPress="return pulsar(event)"/>
				<br/>
				<input type="submit" name="enviar" value="Enviar"/>
			</fieldset>
		</form>
	</body>
</html>