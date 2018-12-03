<html>
    <head>
      <title>Ejercicio 3</title>
      <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Ejercicio 3</h1>
        <?php

            //probamos el bucle while
            $num=0;
            echo"<h2>Con while</h2>";
            while ($num <= 10){
                print"$num<br/>";
                $num++;
            }

            //probamos el bucle do-while
            echo"<h2>Con do while</h2>";
            $num=0;
            do{
                print"$num<br/>";
                $num++;
            }while($num<=10);

            //probamos el bucle for
            echo"<h2>Con for</h2>";
            for($num=0;$num<=10;$num++){
                print"$num<br/>";
            }
        ?>
    </body>
</html>