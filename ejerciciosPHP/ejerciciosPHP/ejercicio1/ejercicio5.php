<html>
    <head>
      <title>Ejercicio 5</title>
      <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Ejercicio 5</h1>
        <?php
            //mostramos los primeros 10 numeros naturales
            //pares en azul e impares en rojo
        for($num=0;$num<=10;$num++){
            if($num%2==0)
                print"<p style= 'color:blue'>$num</p>";
            else
                print"<p style= 'color:red'>$num</p>";
        }
        ?>
    </body>
</html>