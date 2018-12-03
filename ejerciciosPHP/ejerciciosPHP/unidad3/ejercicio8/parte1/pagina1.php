<?php
//include "../conexion2.php";
include "../conexionpdo.php";
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Unidad 3 ejercicio 8_1 pagina1</title>
      <meta charset="utf8"/>
      <link href='../../estilos/ejer8.css' rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
          <h1>Listado de productos por familia</h1>
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <label for="familia">Familia</label>
            <select name="familia">
<?php
//<option name="familia[]">valor</option>
$consulta="select * from familia";
foreach($conexion->query($consulta) as $registro){
    $familia=$registro['nombre'];
    print"              <option name='familia[]'>$familia</option>\n";
}
?>

            </select>
            <input type="submit" name="mostrar" value="Mostrar productos"/>
          </form>
        </header>
        <main >
<?php
if(isset($_POST['mostrar'])){
    $familia=$_POST['familia'];
    $consulta="select * from producto as p, familia as f where p.familia=f.cod and f.nombre = '".$familia."'";
    $resultado=$conexion->query($consulta);
    print"        <h2>Productos disponibles: </h2>\n";
    if($resultado){
       // print"        <form action='pagina2.php' method='post'>\n";
        print"        <section class='productos'>\n";
        print"          <p class='negrita'>PRODUCTOS </p>\n";
        print"        </section>\n";
        print"        <section class='precio'>\n";
        print"          <p class='negrita'>PRECIOS</p>\n";
        print"        </section>\n";
        print"        <section class='edicion'>\n";
        print"          <p class='negrita'> &nbsp</p>\n";
        print"        </section>\n";

        foreach($resultado as $registro){
            $producto=$registro['nombre_corto'];//clave tb
            $precio=$registro['PVP'];
            //$nombre=$registro['nombre'];
            //$descripcion=$registro['descripcion'];
            print"        <section class='productos'>\n";
            print"           $producto \n";
            print"        </section>\n";
            print"        <section class='precio'>\n";
            print"          $precio\n";
            print"        </section>\n";
            print"        <section class='edicion'>\n";
            print"          <input type='hidden' name='codigo' value=$producto/>\n";
            print"          <a href='pagina2.php?codigo=$registro[0]'>Editar</a> ";//columna 0 sale el codigo del producto
            //print"          <input type='submit' name='editar' value='Editar'/><br/>\n";
            print"        </section>\n";
        }
        //print"        </form>\n";
    }else{
        print"<span>No existen datos en la base de datos</span>";
    }




}
?>
        </main>
        <footer>
        </footer>
    </body>
<?php
$conexion=null;//cerrar conexion pdo
?>
</html>