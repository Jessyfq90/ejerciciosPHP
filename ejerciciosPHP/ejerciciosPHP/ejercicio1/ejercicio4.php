<html>
    <head>
      <title>Ejercio 4</title>
      <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            print"<h1>Ejercicio 4</h1>";
            /*vamos a comprobar la suma de los primeros numeros
            que sea menor que 80*/
            $acum=0;
            print"La suma de los numeros: ";
            for($num=0;($acum+$num)<80;$num++){
                $acum+=$num;
                print "$num ";
            }
            print"es: $acum";
        ?>
    </body>
</html>