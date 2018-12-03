<?php
include"../cabecera.php";
echo"       <h1>Ejercicio 4</h1>\n";
function pasa_fahrenheit($temp){
    return ((1.8*$temp)+32);
}
$centigrados=10;
$resultado=pasa_fahrenheit($centigrados);
echo"       $centigrados grados centrigrados, son $resultado grados Frhrenheit\n";
?>
    </body>
</html>