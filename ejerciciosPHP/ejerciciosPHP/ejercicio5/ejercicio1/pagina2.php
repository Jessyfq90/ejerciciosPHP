<!DOCTYPE html>
<html>
    <head>
      <title></title>
      <meta charset="utf-8"/>
      <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
    </head>
    <body>
      <h3>Calcula letra DNI - Resultado</h3>
      <?php
        if(!empty($_POST['numero'])){
            $numero=$_POST['numero'];
            print "Número: ".$numero."<br/>";
            if(strlen($numero)!=8){
                 print"<span style='color:red'>< -- El número tiene que tener 8 cifras!!--></span>";
            }else{

            $letras=array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
            $valor=$numero%23;
            $letra=$letras[$valor];
            print"La letra del NIF es: ".$letra;
            }
        }else{
            $numero=$_POST['numero'];

                print"<span style='color:red'>< -- Tienes que introducir un número--></span>";



        }
        ?>
        <br/>
        <a href="pagina1.php">Volver al inicio</a>
    </body>
</html>