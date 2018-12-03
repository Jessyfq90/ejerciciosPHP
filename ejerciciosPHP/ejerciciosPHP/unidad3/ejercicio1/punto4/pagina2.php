<!DOCTYPE html>
<html>
    <head>
      <title>Productos por categoria</title>
      <link href='../../estilos/unit3.css' rel="stylesheet" type="text/css"/>
      <meta charset="utf-8"/>
      <?php
         include"../conexion.php";
        ?>
    </head>
    <body>

<?php
if($error==null){
    if(isset($_POST['enviar']) && !empty($_POST['categoria'])){
        $categoria=$_POST['categoria'];

        $encontrada=false;
        $sentencia="select * from categorias";
        $resultado=$conexion->query($sentencia);
        if($resultado){
           // print"SI hay resultado";
            $registro=$resultado->fetch_array();

            while($registro){
                $regis=$registro['descripcion_categoria'];

                if($regis == $categoria){
                    $categoria=$registro['codigo_categoria'];
                    $encontrada=true;
                    break;
                }
                $registro=$resultado->fetch_array();
            }

            $resultado->close();

            if($encontrada){
                print"<h3>Productos de la tienda</h3>\n";
                print"Categoria: $categoria";
                print"\n<table>\n";
                print"      <tr>\n";
                print"          <th>Código</th>\n";
                print"          <th>Descripción</th>\n";
                print"          <th>Precio</th>\n";
                print"          <th>Stock</th>\n";
                print"      </tr>\n";

                $sentencia="select * from productos";
                $resultado=$conexion->query($sentencia);
                if($resultado){
                    $registro=$resultado->fetch_array();
                    while($registro){
                        if($registro['codigo_categoria']==$categoria){
                            $cod=$registro['codigo_producto'];
                            $desc=$registro['descripcion'];
                            $precio=$registro['precio'];
                            $stock=$registro['stock'];
                            print"      <tr>\n";
                            print"          <td>$cod</td>\n";
                            print"          <td>$desc</td>\n";
                            print"          <td>$precio</td>\n";
                            print"          <td>$stock</td>\n";
                            print"      </tr>\n";
                        }
                        $registro=$resultado->fetch_array();
                    }
                    $resultado->close();
                    print"</table>\n";
                    print"<form class='sin' action='../punto3/formulario.php' method='post'>\n";
                    print"<input class='submit' type='submit' name='añadir' value='Añadir producto'/>\n";
                    print"</form>\n";
                }else{
                    print"<span>No hay resultado para productos</span>";
                }

            }else{
                print"<span>No existe esa categoria en la base de datos</span>";
            }


        }else{
            print"<span>No hay resultado para categorias</span>";
        }

    }else if(isset($_POST['enviar']) && empty($_POST['categoria'])){
        print"<span>No elegiste categoria</span>";
    }else if(!isset($_POST['enviar'])){
        print"<span>No llegaste a través del formulario</span>";
    }
}
?>
  </body>
</html>