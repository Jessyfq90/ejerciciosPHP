<?php
include "ejercicio0.php";
echo cabecera("ejercicio 4_3");

$a=array(1,2,3,1,1,2,3,3,4,4,4,0,1);
$b=array("blanco","azul","blanco","blanco","azul","Blanco","Azul");
$c=array("b"=>"verde","c"=>"rojo","e"=>"verde","f"=>"Rojo","g"=>"Verde","a"=>"rojo","d"=>"azul");

echo"           <h1>Ordenación con sort</h1>\n";
echo"           <h2>Array a</h2>\n";
sort($a);
print_r($a);
echo"           <h2>Array b</h2>\n";
sort($b);
print_r($b);
echo"           <h2>Array c</h2>\n";
sort($c);
print_r($c);

echo"           <h1>Ordenación con rsort</h1>\n";
echo"           <h2>Array a</h2>\n";
rsort($a);
print_r($a);
echo"           <h2>Array b</h2>\n";
rsort($b);
print_r($b);
echo"           <h2>Array c</h2>\n";
rsort($c);
print_r($c);


echo"           <h1>Ordenación con ksort</h1>\n";
echo"           <h2>Array a</h2>\n";
ksort($a);
print_r($a);
echo"           <h2>Array b</h2>\n";
ksort($b);
print_r($b);
echo"       <h2>Array c</h2>\n";
ksort($c);
print_r($c);


echo"           <h1>Ordenación con asort</h1>\n";
echo"           <h2>Array a</h2>\n";
asort($a);
print_r($a);
echo"           <h2>Array b</h2>\n";
asort($b);
print_r($b);
echo"           <h2>Array c</h2>\n";
asort($c);
print_r($c);


echo"           <h1>Ordenación con arsort</h1>\n";
echo"           <h2>Array a</h2>\n";
arsort($a);
print_r($a);
echo"           <h2>Array b</h2>\n";
arsort($b);
print_r($b);
echo"           <h2>Array c</h2>\n";
arsort($c);
print_r($c);

//Elimino "c" del array $c
//unset($c["c"]);
echo"           <h1>Visualizamos contenido del array c tras borrar el segundo elemento c=>'rojo'</h1>\n";
foreach($c as $indice => $elemento){
    if($indice == "c")
        unset($c[$indice]);
}
print_r($c);


?>
      </body>
</html>