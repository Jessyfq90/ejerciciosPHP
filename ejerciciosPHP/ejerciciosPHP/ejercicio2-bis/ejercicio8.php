<?php
include"../cabecera.php";
$matriz1=array("cougar","ford",null,"2.500","v6",172);
$matriz2=array(2=>"cougar","ford",1=>null,0=>"2.500","v6",172);
echo"   <h1>Recorrer un array con for y for each usando indice</h1>\n";
echo"   <h3>matriz1 con for</h3>\n";
for($i=0;$i<count($matriz1);$i++){
    echo"$matriz1[$i]";
    echo" - ";
}
echo"\n   <h3>matriz1 con for each</h3>\n";
foreach($matriz2 as $codigo => $elemento){
    echo"[$codigo]";
    echo"$elemento\n<br/>";
}
echo"\n   <h3>matriz2 con for</h3>\n";
for($i=0;$i<count($matriz2);$i++){
    echo"$matriz2[$i]";
    echo" - ";
}
echo"\n   <h3>matriz2 con for each</h3>\n";
foreach($matriz2 as $codigo => $elemento){
    echo"[$codigo]";
    echo"$elemento\n<br/>";
}
echo"\n<h3>Utilizando var_dump() con matriz1</h3>";
var_dump($matriz1);
echo"\n<h3>Utilizando var_dump() con matriz2</h3>";
var_dump($matriz2);
?>
   </body>
</html>