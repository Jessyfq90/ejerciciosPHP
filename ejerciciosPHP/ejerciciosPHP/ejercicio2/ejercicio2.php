
<?php
include"../cabecera.php";
echo"       <h1>Ejercicio 2</h1>\n";
function concatena($var1, $var2){
    $cadena="$var1$var2";
    return $cadena;
}
$v1="Hola don Pepito.";
$v2="Hola don José,";
$lee=concatena($v1, $v2);
echo"       Resultado de concatenar las dos cadenas: $lee\n";
?>
   </body>
</html>