<!DOCTYPE html>
<html>
    <head>
      <title>Ejercicio 4 página 2</title>
      <meta charset="utf-8"/>
       <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
      <?php
      function pasaaCelsius($grados){
        $cel=($grados-32)/1.8;
        return $cel;
      }
      function pasaaFahrenheit($grados){
          $far=(1.8*$grados)+32;
          return $far;
      }
      ?>

    </head>
    <body>
        <h3>Convertidor de temperaturas Celsius /Fahrenheit(Resultado)</h3>
        <?php
        if(!empty($_POST['temp'])){
            $temperatura=$_POST['temp'];
            $tipo=$_POST['tipo'];
            if($tipo=='C'){
                print"Convertimos $temperatura grados Fahrenheit que son: ";
                $convertido=pasaaCelsius($temperatura);
                print" $convertido grados Celsius\n";
            }else if($tipo=='F'){
                print"Convertimos $temperatura grados Celsius que son: ";
                $convertido=pasaaFahrenheit($temperatura);
                print" $convertido grados Fahrenheit\n";
            }else{
                print"<span>No elegiste Celsius ni Fahrenheit</span>\n";
            }
        }else{
            print"<span>Debe introducir un número</span>";
        }
        ?>
        <br/><a href="pagina1.php">Volver al formulario</a>
    </body>
</html>