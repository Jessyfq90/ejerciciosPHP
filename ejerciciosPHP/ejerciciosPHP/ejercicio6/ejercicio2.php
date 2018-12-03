<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio6_2 pagina1</title>
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
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<fieldset>
				<legend>Datos pedido</legend>
				<label for="cuadernos">Número de cuadernos: </label>
				<input type="text" size="4" name="cuadernos" value="" onKeyPress="return pulsar(event)"/>
				<br/>
				<input type="submit" name="enviar" value="Enviar"/>
			</fieldset>
		</form>
    <?php
      if(isset($_POST['enviar']) && empty($_POST['cuadernos'])){ //pulso enviar y cuadernos está vacío
        print"<span>Faltan datos</span><br/>";
      }else if(isset($_POST['enviar']) && !empty($_POST['cuadernos']) ){//pulso enviar y cuadernos NO está vacío
        $cuaderno=$_POST['cuadernos'];
        $letra=0;
        for($i=0;$i<strlen($cuaderno);$i++){
          if(ord($cuaderno[$i])<48 || ord($cuaderno[$i])>57){
            $letra=1;
            break;
          }
        }
        if($letra==0){//solo hay numeros en $cuaderno
          $precio=0;
          if($cuaderno<10){
            $precio=$cuaderno*2;
          }else if($cuaderno < 30){
            $precio=$cuaderno*1.5;
          }else{
            $precio=$cuaderno;
          }
          print"El precio asciende a $precio €<br/>";
        }else{//Hay algún caracter que no corresponde a un numero
          print"<span>Cantidad errónea</span><br/>";
        }
      }
    ?>
	</body>
</html>