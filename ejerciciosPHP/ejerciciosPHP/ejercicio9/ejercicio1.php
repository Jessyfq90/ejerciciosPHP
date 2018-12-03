<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicio9</title>
    <meta charset="utf-8"/>
    <link href='../estilos/ejer9.css' rel="stylesheet" type="text/css"/>

  </head>
  <body>
      <h3>AGENDA</h3>
<?php


    $agenda=array("Mercedes"=>98533434,"Pedro"=>676898989,"Ramon"=>656232323);
    if(!isset($_SESSION['visible'])){
        print"      <ul>\n";
        foreach($agenda as $indice => $valor){
            print"          <li>$indice: $valor</li>\n";
        }
        print"      </ul>\n";
        $_SESSION['array']=$agenda;
        $_SESSION['visible']=true;

    }


if(isset($_POST['continuar'])){
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    //si nombre y telefono no están vacíos agrego un dato al array.
    if(!empty($_POST['nombre']) && !empty($_POST['telefono'])){
        //La primera vez entra por el else porque aun no cargamos el array en sesion
       //Las demás veces entra por el if, porque cargamos el array en sesión la primera vez que calcamos el botón
        if(isset($_SESSION['array'])){
            //print"ya cargamos el array en sesión";
            $actual=$_SESSION['array'];
            $actual[$nombre]=$telefono;
            $_SESSION['array']=$actual;
            $_SESSION['visible']=true;//ponerlo donde actualicemos la tabla.

        }else{
            //print"aun no cargamos el array en sesión";
            $agenda[$nombre]=$telefono;
            $_SESSION['array']=$agenda;
            $actual=$_SESSION['array'];
            $_SESSION['visible']=true;
        }
    }else if(!empty($_POST['nombre']) && empty($_POST['telefono'])){
       // print"buscamos numero en el array para borrarlo.\n";
        $nombre=$_POST['nombre'];
        $encuentra=false;
        foreach($_SESSION['array'] as $indice => $valor){
            if($indice == $nombre){
                unset($_SESSION['array'][$indice]);
                $encuentra=true;
                break;
            }
        }
        if($encuentra){
            print"          se encontró a $nombre en la agenda y se borró\n";
            $_SESSION['visible']=true;
        }else if(!$encuentra){
            print"          la persona $nombre no existía en la agenda\n";
        }
    }



    print"      <ul>\n";
    foreach($_SESSION['array'] as $indice => $valor){
        print"          <li>$indice: $valor</li>\n";
    }
    print"      </ul>\n";
}

?>

      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <label for="nombre">Nombre: </label>
          <input type="text" value="" name="nombre" id="nombre" pattern="[a-zA-Z\sáéíóúÁÉÍÓÚñÑ]{3,20}" required/>
          <br/>
          <label for="telefono">Teléfono: </label>
          <input type="text" value="" name="telefono" id="telefono" pattern="[6|7|9][0-9]{8}"/>
          <br/>
          <input type="submit" value="Continuar..." name="continuar"/>
      </form>
    </body>
</html>