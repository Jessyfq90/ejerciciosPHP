<?php
include"../cabecera.php";
    $cad1="Atención";
    $cad2="atención";
    echo"    <table>\n";
    echo"       <tr>\n";
    echo"           <td>Cadena 1</td>\n";
    echo"           <td> $cad1</td>\n";
    echo"       </tr>\n";

    echo"       <tr>\n";
    echo"           <td>Cadena 2</td>\n";
    echo"           <td>$cad2</td>\n";
    echo"       </tr>\n";

    echo"       <tr>\n";
    echo"           <td>strcmp(cadena1, cadena2)</td>\n";
    echo"           <td>".strcmp($cad1,$cad2) ."</td>\n";
    echo"       </tr>\n";

    echo"       <tr>\n";
    echo"           <td>strcasecmp(cadena1, cadena2) </td>\n";
    echo"           <td>".strcasecmp($cad1,$cad2)." </td>\n";
    echo"       </tr>\n";
    echo"   </table>\n";
?>
   </body>
</html>