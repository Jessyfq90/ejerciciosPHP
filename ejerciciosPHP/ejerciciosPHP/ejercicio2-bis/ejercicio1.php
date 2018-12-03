<?php
    include"../cabecera.php";
    $cadena="bienvenidos";
    $letras=str_split($cadena);
    $longitud=strlen($cadena);
    echo"   <table>\n";
    echo"       <tr>\n";
    echo"           <th>Carácter</th>\n";
    echo"           <th>Posición</th>\n";
    echo"       </tr>\n";

    for($n=0;$n<$longitud;$n++){
        echo"       <tr>\n";
        echo"           <td>$letras[$n]</td>\n";
        echo"           <td>$n</td>\n";
        echo"       </tr>\n";
    }

    echo"   </table>\n";
?>
   </body>
</html>