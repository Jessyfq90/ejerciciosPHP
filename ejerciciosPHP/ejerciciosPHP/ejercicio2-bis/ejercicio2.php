<?php
    include"../cabecera.php";
    $cadena="bienvenidos";
    echo"    <table>\n";
    echo"       <tr>\n";
    echo"           <th>Carácter</th>\n";
    echo"           <th>Posición</th>\n";
    echo"       </tr>\n";

    foreach( count_chars($cadena,1) as $n => $val){
        echo"       <tr>\n";
        echo"           <td>".chr($n)."</td>\n";
        echo"           <td>$val</td>\n";
        echo"       </tr>\n";
    }
    echo"   </table>\n";
?>
  </body>
</html>