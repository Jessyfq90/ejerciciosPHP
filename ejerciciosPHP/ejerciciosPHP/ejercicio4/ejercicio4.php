<?php
include "ejercicio0.php";
echo cabecera("ejercicio 4_4");

function sumaN($n,$array){
    if($n<count($array)){
        $suma=0;
        for($i=0;$i<$n;$i++){
            $suma+=$array[$i];
        }
        return $suma;
    }
    //si devuelve 0 es que n es mayor que la longitud del array
    return 0;
}


$n=5;

for($i=0;$i<15;$i++){
    $array[]=rand(1,400);
}
echo"           <h2>Contenido del array generado</h2>\n";
echo"           <ul>\n";
foreach ($array as $indice => $valor){
    echo"               <li> $valor </li>\n";
}
echo"           </ul>\n";

$sum=sumaN($n,$array);
echo"           <h2>La suma de los $n primeros números del array es: $sum </h2>\n";

?>
      </body>
</html>