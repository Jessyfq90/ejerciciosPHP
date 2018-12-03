<?php
include "../conexion.php";
$conexion->query("SET NAMES utf8");
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Unidad 3 ejercicio 3_3</title>
      <meta charset="utf-8"/>
      <link href='../../estilos/unit3.css' rel="stylesheet" type="text/css"/>
    </head>
    <body>
      <h1>Consulta de noticias</h1>
<?php
if(isset($_POST['enviar'])){
    $categoria=$_POST['categoria'];

    $sentencia="select * from noticias where categoria='".$categoria."'";
    $resultado=$conexion->query($sentencia);
    if($resultado){
        print"       <table>\n";
        print"        <tr>\n";
        print"          <th>Título</th>\n";
        print"          <th>Texto</th>\n";
        print"          <th>Categoria</th>\n";
        print"          <th>Fecha</th>\n";
        print"          <th>Imagen</th>\n";
        print"        </tr>\n";
        $registro=$resultado->fetch_array();
        while($registro){
            $titulo=$registro['titulo'];
            $texto=$registro['texto'];
            $cat=$registro['categoria'];
            $fecha=$registro['fecha'];
            $imagen=$registro['imagen'];
            $fecha2=date("j/n/Y",strtotime($fecha));
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
    }else{
        print"<span>no se pudo realizar la consulta</span>";
    }
}
?>
      </table>
    </body>
<?php
$conexion->close();
?>
</html>