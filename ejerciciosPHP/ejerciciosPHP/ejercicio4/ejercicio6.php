<?php
include "ejercicio0.php";
echo cabecera("ejercicio 4_5");
$tabla5x15=array(array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1),
                 array(1,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
                 array(1,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
                 array(1,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
                 array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1));

echo"            <h2>Matriz 5 x 15</h2>\n";
foreach($tabla5x15 as $elemento){
    echo"               ";
    foreach($elemento as $indice =>$valor){
        echo $valor;
    }
    echo"<br/>\n";
}
?>
      </body>
</html>