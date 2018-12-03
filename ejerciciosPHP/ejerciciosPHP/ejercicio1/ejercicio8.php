<html>
    <head>
      <title>Ejercicio 8</title>
      <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Ejercicio 8</h1>
        <?php
            echo"<table align='center' border='1px solid black' width='200px'>";
            echo"<caption>Tabla del ocho</caption>";
            $tabla=8;
            for($num=1;$num<11;$num++){
                $valor=$tabla*$num;
                echo"<tr align='center'>";
                    echo"<td border= 'hidden'>$tabla</td>";
                    echo"<td border= 'hidden'>x</td>";
                    echo"<td border= 'hidden'>$num</td>";
                    echo"<td border= 'hidden'>$valor</td>";
                echo"</tr>";
            }

            echo"</table>";
        ?>
    </body>
</html>