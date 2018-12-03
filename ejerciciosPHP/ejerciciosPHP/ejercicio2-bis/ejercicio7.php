<?php
include"../cabecera.php";
$matriz1=array("cougar","ford",null,"2.500","v6",172);
$matriz2=array(2=>"cougar","ford",1=>null,0=>"2.500","v6",172);
echo"   <h1>Recorre un array 1º numérico y luego asociativo</h1>\n";
    echo"   <table>\n";

    echo"       <tr>\n";
    echo"           <th>Indice</th>\n";
    for($i=0;$i<count($matriz1);$i++){
    echo"           <th>$i</th>\n";
    }

    echo"       <tr>\n";
    echo"           <td>Matriz 1</td>\n";
    for($i=0;$i<count($matriz1);$i++){
        echo"           <td>$matriz1[$i]</td>\n";
    }
    echo"       </tr>\n";

    //recorriendo la parte interna...
    ksort($matriz2);
    echo"       <tr>\n";
    echo"           <td>Matriz 2</td>\n";
    foreach($matriz2 as $codigo => $elemento){
        echo"           <td>$elemento</td>\n";
    }
    echo"       </tr>\n";
    echo"   </table>\n";


?>
   </body>
</html>