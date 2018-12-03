<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio8_2 </title>
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
    	 <?php
        	 if(isset($_POST['dibujar'])&&empty($_POST['numero'])){
        	     print"<span>No ha introducido ningún número.</span>";

        	 }else if(isset($_POST['dibujar'])&&!empty($_POST['numero'])){

	     ?>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="segundo">
		<fieldset>
			<fieldset>
				<?php
					$numero=$_POST['numero'];
					$escribe=1;
					$totalCasillas=$numero*$numero;
					print"<input type='hidden' name='casillas' value='$totalCasillas'/><br/>";
					for($i=0;$i<$numero;$i++){
					    for($j=0;$j<$numero;$j++){


    						print"<input type='checkbox' name='numero[]' value='$escribe' onKeyPress='return pulsar(event)'/>$escribe";
    						if($escribe%$numero==0){
    							print"<br/>";
    						}
    						$escribe=$escribe+1;
					    }
					}
				?>
			</fieldset>
			<input type="submit" name="contar" value="Contar"/>
			<input type="reset" name="borrar" value="Borrar"/>
			</fieldset>
		</form>
    <?php
        }


        if(isset($_POST['contar'])&&!empty($_POST['numero'])){
            $casillas=$_POST['numero'];
            $longitud=count($casillas);
            $numCasillas=$_POST['casillas'];
            print"Has marcado $longitud casillas de un total de $numCasillas: ";
            foreach($casillas as $casilla){
                print"$casilla, ";
            }

        }else if(isset($_POST['contar'])&&empty($_POST['numero'])){
            print"<span>No has seleccionado ninguna casilla</span>";
        }
        if(!isset($_POST['dibujar'])){


	 ?>

    <p>Escribe un número y dibujaré una tabla cuadrada de ese tamaño con casillas de verificación en cada casilla.</p>
    <form id="primero" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="primero">
      <fieldset>
        <label for="numero">Tamaño</label>
        <input type="number" name="numero" value="" minlength="2" onKeyPress="return pulsar(event)"/>
        <input type="submit" name="dibujar" value="Dibujar"/>
      </fieldset>
    </form>
    </body>
    <?php
        }//cierre del if que comprueba que no pulse la tecla dibujar
    ?>
</html>