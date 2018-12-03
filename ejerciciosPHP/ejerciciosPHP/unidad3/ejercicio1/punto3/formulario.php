<!DOCTYPE html>
<html>
    <head>
      <title>Añadiendo producto a categoria</title>
      <link href='../../estilos/unit3.css' rel="stylesheet" type="text/css"/>
      <meta charset="utf-8"/>
      <?php
         include"../conexion.php";
        ?>
    </head>
    <body>
      <h1>Insertar nuevo usuario</h1>
      <form class="form3" action="formulario2.php" method="post">
        <table>
          <tr>
            <td><label for="codigo">Código</label></td>
            <td><input type="text" name="codigo" id="codigo" pattern="[A-Z]{2}[0-9]{4}" title="El código deben ser dos letras mayúsculas y 4 números" value="" required/></td>
          </tr>
          <tr>
            <td><label for="descripcion">Descripción</label></td>
            <td><input type="text" name="descripcion" pattern="[0-9a-zA-Z\sáéíóúÁÉÍÓÚñÑ.,]{3,25}" id="descripcion" value="" required/></td>
          </tr>
          <tr>
            <td><label for="precio">Precio</label></td>
            <td><input type="number" name="precio" id="precio" value="" min="0" required title="Valor numérico mayor que 0"/></td>
          </tr>
          <tr>
            <td><label for="stock">Stock</label></td>
            <td><input type="text" name="stock" id="stock" value="" pattern="[0-9]{0,3}" required title="Valor numérico"/></td>
          </tr>
          <tr>
            <td><label for="categoria">Categoria</label></td>
            <td>

                <?php
                if($error==null){
                    $sentencia="select descripcion_categoria from categorias";
                    $resultado=$conexion->query($sentencia);
                    print"<select name='categoria' id='categoria'>";
                    if($resultado){
                        $registro=$resultado->fetch_array();
                        while($registro!=null){
                            print"\n                  <option name='cat[]'>".$registro['descripcion_categoria']."</option>";
                            $registro=$resultado->fetch_array();
                        }
                    }
                    print"  \n              </select>";
                    $resultado->close();
                }

                ?>

            </td>
          </tr>
        </table>
        <input class="submit" type="submit" name="insertar" value="insertar"/>
      </form>
      <?php
      //$conexion->close();
        ?>
</html>