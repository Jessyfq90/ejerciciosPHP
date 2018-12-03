<!DOCTYPE html>
<html>
    <head>
      <title>Página 1 ejercicio 5_1</title>
      <meta charset="utf-8"/>
      <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
      <?php
        if(!empty($_POST['numero'])){
            $numero=$_POST['numero'];
            print "Número: ".$numero;
            $letras=array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
            $valor=$numero%23;
            $letra=$letras[$valor];
            print"La letra del NIF es: ".$letra;
        }
        ?>
    </head>
    <body>
    <h3>Calcula letra DNI - Formulario</h3>


        <form name="input" action="pagina2.php" method="post">
            Escribe el número del DNI y te indicaré que letra le corresponde:<br/>
            <label for="numero">Número</label>
            <input type="text" name="numero" id="numero" value="" size="8" pattern="[0-9]{8}"/>
            <?php
            if(isset($_POST['calcular']) && empty($_POST['numero'])){
                echo"<span style='color:red'>< -- Debe introducir un número!!--></span>";

            }else if(isset($_POST['calcular']) &&(strlen($_POST['numero'])!=8)){
                echo"<span style='color:red'>< -- El numero debe tener 8 dígitos!!--></span>";
            }
            ?>
            <br/><input type="submit" name="calcular" value="Calcular"/>
        </form>


    </body>
</html>