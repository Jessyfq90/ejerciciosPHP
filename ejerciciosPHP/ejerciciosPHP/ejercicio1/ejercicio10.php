<html>
    <head>
      <title>Ejercicio 10</title>
      <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Ejercicio 10</h1>
        <?php
            $hora=date("H");
            //echo"$hora";
            if((8<=$hora)&&($hora<13)){
                $saludo="Buenos días";
            }
            elseif ((13<=$hora)&&($hora<15)){
                $saludo="Que aproveche la comida";
            }
            elseif ((15<=$hora)&&($hora<18)){
                $saludo="ES la hora del café";
            }
            else{
                $saludo="Buenas noches";
            }
            echo"El saludo es: $saludo";
        ?>
    </body>
</html>