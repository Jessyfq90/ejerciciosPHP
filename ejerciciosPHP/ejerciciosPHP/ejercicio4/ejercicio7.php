<?php
include "ejercicio0.php";
echo cabecera("ejercicio 4_5");
echo"            <h2>Array 1 al 100 salto de 5</h2>\n";
echo"               ";
foreach (range(1,100,5)as $saltos5){
    echo $saltos5." ";
    $array5[]=$saltos5;
}
echo"\n            <h2>Array 2 al 20 salto de 2</h2>\n";
echo"               ";
foreach (range(2,20,2)as $saltos2){
    echo $saltos2." ";
   $array2[]=$saltos2;
}
$juntos= array_merge($array5,$array2);
echo"\n            <h2>Arrays juntos sin ordenar</h2>\n";
echo"               ";
foreach ($juntos as $indice => $valor){
    echo $valor." ";
}
//var_dump($juntos);
arsort($juntos);
echo"\n            <h2>Arrays juntos ordenación descendente</h2>\n";
echo"               ";
//print_r($juntos);
foreach ($juntos as $indice => $valor){
    echo $valor." ";
}
echo"\n";
?>
      </body>
</html>