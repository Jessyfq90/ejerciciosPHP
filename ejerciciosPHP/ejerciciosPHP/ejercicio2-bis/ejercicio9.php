<?php
include"../cabecera.php";
$matriz1=array("cougar","ford",null,"2.500","v6",172);
//eliminamos un elemento
unset($matriz1[3]);
echo"<h2>Imprimo  matriz con print_r</h2>";
print_r($matriz1);
echo"<h2>Imprimo  matriz con var_dump</h2>";
var_dump($matriz1);
//Eliminamos lo que hay en el array usando foreach
foreach($matriz1 as $indice => $valor){
    unset($matriz1[$indice]);
}

//Agregamos elementos
$matriz1[]="seat";
$matriz1[]="mercedes";
//Reindexamos la matriz
$matriz1=array_values($matriz1);
echo"<h2>Imprimo  matriz con var_dump</h2>";
var_dump($matriz1);
?>
   </body>
</html>