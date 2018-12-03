<html>
    <head>
      <title>Ejercicio 11</title>
      <meta charset="utf-8"/>
    </head>
    <body>
      <h1>Ejercicio 11</h1>
        <?php
            echo"<h2>usando for</h2>";
            $suma=0;
            for($numero=1;$numero<1001;$numero++){
                if($numero%2==0){
                    $suma+=$numero;
                }
            }
            print"La suma de los numeros pares del 1 al 1000 es: $suma";
            echo"<h2>usando while</h2>";
            $numero=0;
            $suma=0;
            while($numero<1001){
                if($numero%2==0){
                    $suma+=$numero;
                }
                $numero++;
            }
            print"La suma de los numeros pares del 1 al 1000 es: $suma";
        ?>
    </body>
</html>


