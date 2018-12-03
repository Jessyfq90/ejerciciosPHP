<!DOCTYPE html>
<html>
    <head>
      <title></title>
      <meta charset="utf-8"/>
      <link href='../../estilos/unit3.css' rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <?php
    include"../conexion.php";

        if(isset($_POST['insertar'])){
            if(empty($_POST['codigo']) && empty($_POST['descripcion']) && empty($_POST['precio']) && empty($_POST['stock']) && empty($_POST['categoria'])){
                print"no has introducido ningún dato";
            }elseif (!empty($_POST['codigo']) && !empty($_POST['descripcion']) && !empty($_POST['precio']) && !empty($_POST['stock']) && !empty($_POST['categoria'])){
                print"todos los datos están introducidos<br/>\n";
                if($error==null){//si no existe error al conectarnos a la base de datos, vamos a insertar lo primero recuperamos los datos
                   $codigo_producto=$_POST['codigo'];
                   $descripcion=$_POST['descripcion'];
                   $precio=$_POST['precio'];
                   $stock=$_POST['stock'];
                   $categoria=$_POST['categoria'];
                   //tenemos que consultar la base de datos categoria para coger su codigo
                   // al hacer el insert poner condiciones para que coja el codigo de la categoria.
                   //insert into producto ()values () where $categoria = categorias.categoria
                   //$sentencia="select codigo_categoria from categorias where descripcion_categoria = \'$categoria\'";

                   $sentencia="select * from categorias";
                   $resultado=$conexion->query($sentencia);
                    //print"descripcion de la categoria es: $categoria";
                   if($resultado){

                      // print"encontro la categoria";
                       $registro=$resultado->fetch_array();
                       while($registro){
                           if($registro['descripcion_categoria']==$categoria){
                               $categoria=$registro['codigo_categoria'];
                               //print "codigo categoria $categoria";
                               break;
                           }
                           $registro=$resultado->fetch_array();
                       }
                       $resultado->close();
                   }else{

                    print"<span>no encontro la categoria</span><br/>\n";
                   }

                   //ya tenemos la categoria ahora vamos a insertar.
                   $insertar="insert into productos(codigo_producto, descripcion, precio, stock, codigo_categoria) values('".$codigo_producto."', '".$descripcion."',". $precio.",".$stock.", '".$categoria."')";
                   $resultado1=$conexion->query($insertar);
                   if(!$resultado1){
                       print"<span>la insercion NO FUNCIONA!</span>";
                   }
                  // $resultado1->close();
                }

            }

        }
    ?>
    </body>
</html>