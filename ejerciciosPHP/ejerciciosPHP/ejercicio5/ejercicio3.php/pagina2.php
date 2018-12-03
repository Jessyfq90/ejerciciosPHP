<!DOCTYPE html>
<html>
    <head>
      <title>Ejercicio 3 página 2</title>
      <meta charset="utf-8"/>
       <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
      <link>
      <?php
      function esBisiesto($anio){
          if($anio%4==0){//es divisible por 4
              $es=true;
          }elseif($anio%100==0){
              if($anio%4==0){
                  $es=true;
              }
          }else{
              $es=false;
          }
          return $es;
      }
      ?>

    </head>
    <body>
    <h3>Calculadora de años bisiestros(Resultado)</h3>
    <?php
    if(!empty($_POST['anio'])){
        $anio=$_POST['anio'];
          if($anio>0 && $anio<10000){
          $punto=stripos($anio,'.');//buscamos un punto en la cadena anio
                if(!$punto){
                    if(esBisiesto($anio)){
                        print"El año $anio es Bisiesto porque es múltiplo de 4, pero no de 100";

                    }else{
                        print"<span>El año $anio no es bisiesto</span><br/>\n";
                    }
                }else{
                    print"<span>El número que ha escrito es decimal</span><br/>\n";
                }
         }else{
                print"<span style='color:red'>El número que ha escrito no está entre 0 y 9999</span></br>";
                print"Has escrito el numero: ".$anio;

         }
    }else{
        print"<span>Tienes que introducir un número y no vale el 0</span>";
    }
    ?>
    <a href="pagina1.php">Volver al formulario</a>
    </body>
</html>