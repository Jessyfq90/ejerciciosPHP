<html>
    <head>
      <title>Ejercicio 7</title>
      <meta charset="utf-8"/>
    </head>
    <body>
      <h1>Ejercicio 7</h1>
        <?php
            $num=65;
            $pos=1;
            echo"<table border='1px solid black'>";
            while($pos<11){
                $letra=chr($num);
                echo"<tr>";
                    echo"<td>$letra</td>";
                    echo"<td>$pos</td>";
                echo"</tr>";
                $num++;
                $pos++;
            }
            echo"</table>";
        ?>
    </body>
</html>