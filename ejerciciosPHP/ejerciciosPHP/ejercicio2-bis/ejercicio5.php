<?php
    include"../cabecera.php";
    $cadena="El libro cubre las técnicas basadas en el lenguaje PHP";
    echo"   <table>\n";
    echo"       <tr>\n";
    echo"           <th>cadena</th>\n";
    echo"           <td>$cadena</td>\n";
    echo"       </tr>\n";

    echo"       <tr>\n";
    echo"           <th>substr_count(cadena,a)</th>\n";
    echo"           <td>".substr_count($cadena,'a')."</td>\n";
    echo"       </tr>\n";
    echo"   </table>\n";
?>
   </body>
</html>