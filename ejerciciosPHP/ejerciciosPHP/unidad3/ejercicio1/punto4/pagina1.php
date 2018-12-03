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
    <h3>Seleccione una categoria</h3>
    <form class="punto4" action="pagina2.php" method="post">
      <label for="categoria">Categoria: </label>
<?php
        if($error==null){
            $sentencia="select descripcion_categoria from categorias";
            $resultado=$conexion->query($sentencia);
            print"      <select name='categoria' id='categoria'>";
            if($resultado){
                $registro=$resultado->fetch_array();
                while($registro!=null){
                    print"\n            <option name='cat[]'>".$registro['descripcion_categoria']."</option>";
                    $registro=$resultado->fetch_array();
                }
            }
            print"  \n      </select>";
            $resultado->close();
        }
?>
      <br/>
      <input type="submit" value="Enviar" name="enviar"/>
    </form>
    </body>
<?php
$conexion->close();
?>
</html>