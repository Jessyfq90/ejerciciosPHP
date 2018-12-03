<?php
include "../conexion.php";
$conexion->query("SET NAMES utf8");
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Unidad 3 ejercicio 3_2</title>
      <meta charset="utf-8"/>
      <link href='../../estilos/unit3.css' rel="stylesheet" type="text/css"/>
    </head>
    <body>
      <h1>Consulta de noticias</h1>
      <table>
        <tr>
          <th>Título</th>
          <th>Texto</th>
          <th>Categoria</th>
          <th>Fecha</th>
          <th>Imagen</th>
        </tr>
<?php
    $sentencia="select * from noticias order by fecha";
    $resultado=$conexion->query($sentencia);
    if($resultado){
        $registro=$resultado->fetch_array();
        while($registro){
            $titulo=$registro['titulo'];
            $texto=$registro['texto'];
            $cat=$registro['categoria'];
            $fecha=$registro['fecha'];
            $imagen=$registro['imagen'];
            $fecha2=date("j/n/Y",strtotime($fecha));
           // print "la fecha cambiada es: $fecha2";
            print"        <tr>\n";
            print"          <td>$titulo</td>\n";
            print"          <td>$texto</td>\n";
            print"          <td>$cat</td>\n";
            print"          <td>$fecha2</td>\n";
            if($imagen!=null)
                print"          <td><a href='../../imagenes/$imagen'><img src='../../imagenes/ico-fichero.gif'/></a></td>\n";
            else {
                print"          <td> </td>\n";//no hay imagen se keda vacío
            }

            print"        </tr>\n";
            $registro=$resultado->fetch_array();
        }
    }
?>
      </table>
    </body>
<?php
$conexion->close();
?>
</html>