<?php
    include"../cabecera.php";
    $matriz1 = array("cougar","ford","2.500","v6",172,null);
    $matriz2 = array("cougar","ford",null,"2.500","v6",172);
    echo"   <h1>Recorrer un array simple</h1>\n";
    echo"   <table>\n";

    echo"       <tr>\n";
    echo"           <th>Indice</th>\n";
    for($i=0;$i<count($matriz1);$i++){
    echo"           <th>$i</th>\n";
    }
    echo"       <tr>\n";

    echo"       <tr>\n";
    echo"           <td>Matriz 1</td>\n";
    for($i=0;$i<count($matriz1);$i++){
        echo"           <td>$matriz1[$i]</td>\n";
    }
    echo"       <tr>\n";

    echo"       <tr>\n";
    echo"           <td>Matriz 2</td>\n";
    for($i=0;$i<count($matriz2);$i++){
        echo"           <td>$matriz2[$i]</td>\n";
    }
    echo"       <tr>\n";

    echo"   </table>\n";
?>
   </body>
</html>