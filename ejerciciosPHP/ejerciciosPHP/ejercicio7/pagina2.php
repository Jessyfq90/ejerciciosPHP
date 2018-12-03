<!DOCTYPE html>
<html>
<head>
		<title>Ejercicio7_1 pagina2</title>
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
    <?php
        if(!empty($_POST['numero'])){
    ?>
		<form action="pagina3.php" method="post">
			<p>Escriba el nombre de la receta:</p>
			<label for="nombre">Nombre de la receta:</label>
			<input type="text" name="nombre" value="" pattern="[a-zA-Z\sáéíóúÁÉÍÓÚñÑ]*" onKeyPress="return pulsar(event)"/>
			<br/>

			Escriba los ingredientes de la receta y la cantidad de cada uno:
			<fieldset>
			<?php

				$numero=$_POST['numero'];
				for($i=0;$i<$numero;$i++){
					print"Ingrediente <input type='text' name='ingre[]' value='' pattern='[a-zA-Z\sáéíóúÁÉÍÓÚñÑ]*' onKeyPress='return pulsar(event)'/> ";
					print"Cantidad <input type='number' name='cant[]'  size='4' maxlength='4' value='' onKeyPress='return pulsar(event)'/>";
					print"Unidades <input type='text' name='unit[]' value=''  size='2' onKeyPress='return pulsar(event)'/><br/>";
				}
			?>
			</fieldset>
			<fieldset>
				<legend>Realización</legend>
				<textarea rows="15" cols="50" id="realizacion" name="realizacion" style="overflow:scroll;"></textarea>
			</fieldset>
			<input type="submit" name="anadir" value="Añadir"/>
		</form>
            <?php
			}else{//si numero no está vacío hace todo lo anterior
			      print"<span>No ha introducido el número de ingredientes</span>";
			}
			?>
         <br/>
        <a href="pagina1.php">Volver a la pagina anterior</a>
	</body>
</html>