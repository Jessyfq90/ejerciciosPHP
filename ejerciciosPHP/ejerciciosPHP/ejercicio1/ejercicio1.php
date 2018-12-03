<html>
    <head>
      <title>Ejercicio01_01</title>
      <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <?php
            $frase="Hola Mundo";
            echo"<h2>Con echo</h2>";
            echo"<p>$frase</p>";
            echo"<p>En negrita <b>$frase</b></p>";
            echo"<p>Subrayado <u>$frase</u>";
            echo"<p>En cursiva <i>$frase</i></p>";

            print"<p>Hola Mundo</p>";
            print"<p>En negrita <b>$frase</b></p>";
            print"<p>Subrayado <u>".$frase."</u>";
            print"<p>En cursiva <i>$frase</i></p>";
        ?>
    </body>
<html>