<html>
    <head>
      <title>Ejercicio 0</title>
      <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <?php
            $nombre='Jessica Fdez Quiñones';
            $nombre1= "Jessica Fdez Quiñones";
            $edad= 28;

            echo '<h2>comillas simple dentro de simples</h2>';
            echo'<h3>Con echo</h3>';
            echo 'Mi nombre es $nombre y tengo $edad años.';
            echo 'Mi apodo es \"Txirry\"';
            print '<h3>Con print</h3>';
            print 'Mi nombre es '.$nombre.' y tengo '.$edad.' años.';
            print 'Mi apodo es \"Txirry\"';

            echo '<h2>comillas dobles dentro de simples</h2>';
            echo'<h3>Con echo</h3>';
            echo 'Mi nombre es $nombre1 y tengo $edad años.';
            echo 'Mi apodo es \"Txirry\"';
            print '<h3>Con print</h3>';
            print 'Mi nombre es '.$nombre1.' y tengo '.$edad.' años.';
            print 'Mi apodo es \"Txirry\"';

            echo "<h2>comillas simple dentro de dobles</h2>";
            echo"<h3>Con echo</h3>";
            echo "Mi nombre es $nombre y tengo $edad años.";
            echo "Mi apodo es \"Txirry\"";
            print "<h3>Con print</h3>";
            print "Mi nombre es ".$nombre." y tengo ".$edad." años.";
            print "Mi apodo es \"Txirry\"";

            echo "<h2>comillas dobles dentro de dobles</h2>";
            echo"<h3>Con echo</h3>";
            echo "Mi nombre es $nombre1 y tengo $edad años.";
            echo "Mi apodo es \"Txirry\"";
            print "<h3>Con print</h3>";
            print "Mi nombre es ".$nombre1." y tengo ".$edad." años.";
            print "Mi apodo es \"Txirry\"";
        ?>
        <h1>Ejercicio 2</h1>
        <?php
            $porcentaje= 125 * 30 / 100;
            echo"<h2>con echo</h2>";
            echo "El porcentaje 30% de 125 es: $porcentaje";
            print"<h2>con print</h2>";
            print "El porcentaje 30% de 125 es: ".$porcentaje;
        ?>
        <h1>Ejercicio 3</h1>
        <?php
            //creamos las variables alto, ancho y precio de la pintura
            $alto = 2.5;
            $ancho = 4;
            $precio = 1.2;
            //Calculamos superficie y precio total de la pintura
            $superficie = $alto * $ancho;
            $precioTotal = $superficie*$precio;

            //mostramos los mensajes
            echo"<h2>Con echo</h2>";
            echo"El pintor ha de invertir $precioTotal € para pintar una pared
            de $alto de alto y $ancho de ancho";
            print"<h2>Con print</h2>";
            print"El pintor ha de invertir ".$precioTotal." € para pintar una
            pared de ".$alto." de alto y ".$ancho." de ancho";
        ?>
        <h1>Ejercicio 4</h1>
        <?php
            $pantalon=6;
            $precioPantalon=60;
            $cRojas=8;
            $preciocRojas=70;
            $cAzules=4;
            $preciocAzules=90;
            $jerseis=6;
            $precioJerseis=25;
            $calcetines=9;
            $precioCalcetines=6;

            //hayamos el total ganado
            $totalDiario=($pantalon*$precioPantalon)+($cRojas*$preciocRojas)+
            +($cAzules*$preciocAzules)+($jerseis*$precioJerseis)+
            +($calcetines*$precioCalcetines);

            //hayamos el promedio de cada prenda
            $totalPrendas=$pantalon+$cRojas+$cAzules+$jerseis+$calcetines;
            $promedio=$totalPrendas/5;
            echo"<h2>Con echo</h2>";
            echo"Total ganado en el dia es: $totalDiario";
            echo"El promedio por prendas es: $promedio";

            print"<h2>Con print</h2>";
            print "Total ganado en el dia es: ".$totalDiario;
            print"El promedio por prendas es: $promedio";
        ?>
        <h1>Ejercicio 5</h1>
            <?php
                $numero = 1;
                $cont3 = 0;
                $cont5 = 0;
                while($numero < 30){
                    if($numero % 3 == 0){
                        $cont3++;
                    }
                    if($numero % 5 == 0){
                        $cont5++;
                    }
                    $numero++;
                }
                echo"<h2>Con echo</h2>";
                echo"En los 30 primeros numeros hay $cont3 multiplos de tres y
                $cont5 multiplos de cinco";

                print"<h2>Con print</h2>";
                print"En los 30 primeros numeros hay ".$cont3." multiplos de tres
                y $cont5 multiplos de cinco";
            ?>

        <h1>Ejercicio 6</h1>
            <?php
            date_default_timezone_set("Europe/Madrid");
                $dia=date("j");
                $sem=date("N");
                switch ($sem) {
                    case 1:
                        $semana="lunes";
                        break;
                    case 2:
                        $semana="martes";
                        break;
                    case 3:
                        $semana="miércoles";
                        break;
                    case 4:
                        $semana="jueves";
                        break;
                    case 5:
                        $semana="viernes";
                        break;
                    case 6:
                        $semana="sabado";
                        break;
                    case 7:
                        $semana="domingo";
                        break;
                }
                echo"<h2>Con echo</h2>";
                echo"Hoy es $dia, y es $semana";

                print"<h2>Con print</h2>";
                print"Hoy es $dia, y es $semana";
            ?>
        <h1>Ejercicio 7</h1>
            <?php

            ?>
        <h1>Ejercicio 8</h1>
            <?php
                $cadena1="abcdefghi";
                $cadena2="123";
                $replace=substr_replace($cadena1,$cadena2,2);
                echo"<table border='1px solid black' width='400 px'>";
                    echo"<tr align='center'>";
                        echo"<td>CADENA 1</td>";
                        echo"<td>$cadena1</td>";
                    echo"</tr>";

                    echo"<tr align='center'>";
                        echo"<td>CADENA 2</td>";
                        echo"<td>$cadena2</td>";
                    echo"</tr>";

                    echo"<tr align='center'>";
                        echo"<td>substr_replace(cadena1,cadena2,2)</td>";
                        echo"<td>$replace</td>";
                    echo"</tr>";

                    $replace=substr_replace($cadena1,$cadena2,2,3);
                    echo"<tr align='center'>";
                        echo"<td>substr_replace(cadena1,cadena2,2,3)</td>";
                        echo"<td>$replace</td>";
                    echo"</tr>";

                    $replace=substr_replace($cadena1,$cadena2,-2);
                    echo"<tr align='center'>";
                        echo"<td>substr_replace(cadena1,cadena2,-2)</td>";
                        echo"<td>$replace</td>";
                    echo"</tr>";

                    $replace=substr_replace($cadena1,$cadena2,2,-3);
                    echo"<tr align='center'>\n";
                        echo"<td>substr_replace(cadena1,cadena2,2,-3)</td>\n";
                        echo"<td>$replace</td>\n";
                    echo"</tr>\n";
                echo"</table>\n";
            ?>
        <h1>Ejercicio 9</h1>
            <?php
                $cadena="jessica fernandez quiñones";
                $longitud=strlen($cadena);
                $separacion=explode(" ",$cadena);
                $nombre=$separacion[0];
                $apellidos=$separacion[1]." ".$separacion[2];
                $mayusculaPrimera=ucwords($cadena);
                $nombreMayuscula=strtoupper($nombre);
                echo"número de caracteres: $longitud<br/>";
                echo"nombre: $nombre<br/>";
                echo"apellidos: $apellidos<br/>";
                echo"nombre y apellidos con la primera letra en mayúscula: $mayusculaPrimera<br/>";
                echo"Extraigo el nombre y lo visualizo en mayúsculas: $nombreMayuscula<br/>";
            ?>
        <h1>Ejercicio 10</h1>
            <?php

            ?>
    </body>
</html>