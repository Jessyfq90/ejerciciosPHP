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
      <form action="pagina2.php" method="post">
        <label for="categoria">Mostrar noticias de la categoria:</label>
        <select name="categoria" id="categoria">
<?php
   $sentencia="select distinct categoria from noticias";
   $resultado=$conexion->query($sentencia);
   if($resultado){
       $registro=$resultado->fetch_array();
       while($registro){
            $categoria=$registro['categoria'];
            print"          <option name='categoria[]'>$categoria</option>\n";
            $registro=$resultado->fetch_array();
       }
   }else{
        print"<span>no se pudo realizar la consulta</span>";
   }
?>
        </select><br/>
        <input type="submit" name="enviar" value="Enviar"/>
      </form>
    </body>
<?php
$conexion->close();
?>
</html>