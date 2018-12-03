<?php
function cabecera($titulo){
    $cabecera="<!DOCTYPE html>
    <html>
        <head>
            <title> $titulo </title>
            <meta charset='utf-8'/>
       <link href='../estilos/ejer4.css' rel='stylesheet' type='text/css'  />
        </head>
        <body>
            <h1> $titulo </h1>\n";
    return $cabecera;
}
//echo cabecera("ejercicio 4_0");
//print"      </body>
//</html>";
?>

