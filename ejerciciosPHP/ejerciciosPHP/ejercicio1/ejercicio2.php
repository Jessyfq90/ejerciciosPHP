<html>
    <head>
      <title>Ejercicio 2</title>
      <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Ejercicio 2</h1>
        <?php
            //hacemos suma y division de variables
            echo"<h2>Sumamos y Dividimos</h2>";
            $num1=18;
            $num2=5;
            $suma=$num1+$num2;
            $division=$num1/$num2;
            echo'La suma de $num1 y $num2 es: ';
            echo "$suma";
            print'<br/>La division de $num1 y $num2 es: '.(int)$division;

            print"<h2>Concatenamos</h2>";
            //concatenamos cadenas
            $cadena1="buenos dias";
            $cadena2 ="tenga usted";
            echo"concatenando en echo: $cadena1 $cadena2";
            print"<br/>concatenando en print: $cadena1 ".$cadena2;
        ?>
    </body>
</html>