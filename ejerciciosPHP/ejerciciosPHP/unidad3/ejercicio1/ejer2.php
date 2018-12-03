<!DOCTYPE html>
<html>
    <head>
      <title></title>
      <meta charset="utf-8"/>
      <link href='../estilos/unit3.css' rel="stylesheet" type="text/css"/>
    </head>
    <body>
<?php

//echo $conexion->server_info;
include"conexion.php";
if($error ==null){
print"<table class='muestra'>\n";
print"  <tr>\n";
print"      <th>Código</td>\n";
print"      <th>Descripción</td>\n";
print"  </tr>\n";
//cargamos las categorias
$sentencia="select codigo_categoria, descripcion_categoria from categorias";
$resultado=$conexion->query($sentencia);

if($resultado){
    $registro=$resultado->fetch_array();
    while($registro != null){
        print"  <tr>\n";
        print"      <td>".$registro['codigo_categoria']."</td>\n";
        print"      <td>".$registro['descripcion_categoria']."</td>\n";
        print"  </tr>\n";
        //importante para que avance, sino nos muestra siempre el primer registro en bucle
        $registro=$resultado->fetch_array();
    }
}
print"</table>\n";
$resultado->close();
$conexion->close();
}

?>
    </body>
</html>