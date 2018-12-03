
<?php
include"../cabecera.php";
echo"       <h1>Ejercicio 5</h1>\n";
function pasa_centigrados($temp){
    return (($temp-32)/1.8);
}
$fahrenheit=50;
$resultado=pasa_centigrados($fahrenheit);
echo"       $fahrenheit grados fahrenheit, son $resultado grados centigrados.\n";
?>
   </body>
</html>