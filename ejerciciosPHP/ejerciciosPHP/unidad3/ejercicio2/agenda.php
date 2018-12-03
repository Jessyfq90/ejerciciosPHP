<?php
include "conexion.php"
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Agenda base de datos</title>
        <meta charset="utf-8"/>
        <link href='../estilos/unit3.css' rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <h2>Agenda</h2>
<?php
    if($error==null){
        $sentencia="select * from contacto";
        $resultado=$conexion->query($sentencia);
        if($resultado){
            $registro=$resultado->fetch_array();
            print"    <ul>\n";
            while($registro){
                $nombre=$registro['nombre'];
                $telefono=$registro['telefono'];
                //guardo en un array todo lo que hay en la base de datos agenda
                $agenda[$nombre]= $telefono;
                print"      <li>$nombre : $telefono </li>\n";
                $registro=$resultado->fetch_array();
            }
            print"    </ul>\n";
            $resultado->close();
            //print_r($agenda);
        }else{
            print"<span>No hay contactos</span>";
        }
    }
?>
    <h2>Editar/Añadir/Eliminar contacto</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" value="" pattern="[a-zA-Z\sáéíóúÁÉÍÓÚñÑ]{3,16}"/>
      <br/>
      <label for="telefono">Telefono</label>
      <input type="text" name="telefono" id="telefono" value="" pattern="[6|7|9][0-9]{8}"/>
      <br/>
      <input type="submit" name="continuar" value="Continuar.."/>
    </form>

<?php
if(isset($_POST['continuar'])&& !empty($_POST['nombre'])){
    $nombre=$_POST['nombre'];
    //el nombre no está vacío, ahora comprobamos si está vacío el telefono o no.
    if(!empty($_POST['telefono'])){
        //si no está vacío, comprobamos si existe el nombre ya registrado:
        //  -si esta registrado actualizamos numero
        //  -si no está registrado lo insertamos
        $telefono=$_POST['telefono'];

        $sentencia="select * from contacto where nombre= '".$nombre."'";
        $resultado=$conexion->query($sentencia);
        if($resultado){//existe ese nombre en la base de datos--> actualizo
            $lineas=$resultado->num_rows;
           // $lineas: 0  no existe inserto. 1  existe actualizo
            $resultado->close();
            if($lineas==0){
                $sentencia="insert into contacto (nombre, telefono) values ('".$nombre."',".$telefono.")";
                $resultado1=$conexion->query($sentencia);


                if(!$resultado1){
                    print"<span>No funciona la insercion</span>";
                }
                //$resultado1->close();

            }else if($lineas==1){//existe asique actualizo
                $sentencia="update contacto set telefono = ".$telefono." where nombre = '".$nombre."'";
                $resultado1=$conexion->query($sentencia);
                if(!$resultado1){
                    print"<span>No funciona la actualizacion</span>";
                }
                //$resultado1->close();
            }

        }

    }else if(empty($_POST['telefono'])){
        //si no mete numero comprobamos que existe el nombre en la base de datos y lo borramos.

        $sentencia="select * from contacto where nombre= '".$nombre."'";
        $resultado=$conexion->query($sentencia);
        if($resultado){
            $lineas=$resultado->num_rows;
            $resultado->close();
            print"numero de lineas es: $lineas";
            if($lineas==0){//no existe ese nombre
                print"<span>No existe ese nombre en la base de datos, imposible borrar</span>";
            }else if($lineas==1){//existe ese nombre
                $borrar="DELETE FROM contacto where nombre ='".$nombre."'";
                $resultado2=$conexion->query($borrar);

                if(!$resultado2){
                    print"<span>No funciona el borrado</span>";
                }
            }
        }


    }
}else if(isset($_POST['continuar'])&& empty($_POST['nombre'])){
    print"<span>Pulsaste continuar sin introducir el nombre, no se puede realizar ninguna operación.";
}
?>
  </body>
<?php
  $conexion->close();

?>
</html>