<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio8_1 pagina2</title>
		<meta charset="utf-8"/>
        <link href='../../estilos/ejer8_1.css' rel="stylesheet" type="text/css"/>
	     <script>
           function pulsar(e){
                tecla = (document.all) ? e.keyCode :e.which;
                return tecla!=13;
            }
       </script>
  </head>
	<body>
		<h3>TABLA CON CASILLAS DE VERIFICACIÓN - PASO1</h3>
        <?php
        if(empty($_POST['numero'])){
            print"<span>No ha introducido ningún número.</span>";
        }else if(!empty($_POST['numero'])){

        ?>
		<p>Escribe un número y dibujaré una tabla cuadrada de ese tamaño con casillas de verificación en cada casilla.</p>
		<form action="pagina3.php" method="post">
		<fieldset>
            <input type='hidden' name='casillas' value='$totalCasillas'/></td>
              <table>
              <tr>
				<?php
					$numero=$_POST['numero'];
					$escribe=1;

					$totalCasillas=$numero*$numero;
					for($i=0;$i<$numero;$i++){
					    if($i!=0)
					        print"                ";
					    for($j=0;$j<$numero;$j++){
    						print"<td class='check'><input  type='checkbox' name='numero[]' value='$escribe' onKeyPress='return pulsar(event)'/>$escribe</td>\n";
    						print"                ";
    						if($escribe%$numero==0){
    						    print"</tr>";
    							print"\n             <tr>\n";
    						}
    						$escribe=$escribe+1;
					    }
					}
					print"</tr>";
					print"</table>";
				?>


			<input type="submit" name="contar" value="Contar"/>
			<input type="reset" name="borrar" value="Borrar"/>

      </fieldset>
		</form>
    <?php
        }
        ?>
        <br/>
        <a href="pagina1.php">Volver al inicio</a>
	</body>
</html>