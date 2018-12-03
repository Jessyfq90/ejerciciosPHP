<?php
include "ejercicio0.php";
echo cabecera("ejercicio 4_5");
$matriz2x2 = array(array(1,0,0,0,0),
                   array(0,1,0,0,0),
                   array(0,0,1,0,0),
                   array(0,0,0,1,0),
                   array(0,0,0,0,1));
echo"           <h2>Matriz</h2>\n";
foreach($matriz2x2 as $elementos){
    echo"               ";
    foreach($elementos as $indice => $valor){
        echo"$valor ";
    }
    echo"<br/>\n";
}
?>
      </body>
</html>