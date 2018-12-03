
<!DOCTYPE html>
<html>
    <head>
      <title>Ejercicio 5 página 2</title>
      <meta charset="utf-8"/>
       <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>

       <?php
           function esCorreo($cadena){
               $longitud=strlen($cadena);
               //Comprobamos que tiene  @
               if(strstr($cadena,"@")){
                   //comprobamos que @ no es la ultima pos
                   if($cadena[$longitud-1]!="@"){
                       //Comprobamos que tiene el caracter .
                       if(strstr($cadena,".")){
                           //comprobamos que no tiene el . en la ultima posicion
                           if($cadena[$longitud-1]!="."){
                               //vamos a ver en que posiciones existen puntos
                               if(posicionesSeguidas($cadena)){
                                   echo"           La dirección de correo electrónico: $cadena.<span class='bueno'> es válida</span>\n";
                                   return true;
                               }
                           }
                       }
                   }
               }
               echo"         La dirección de correo electrónico: $cadena. <span>no es válida</span>\n";
               return false;
           }




           function posicionesSeguidas($cadena){
               for($i=0;$i<(strlen($cadena)-1);$i++){
                   $primerPos=$cadena[$i];
                   $secondPos=$cadena[$i+1];
                   if(($primerPos== ".") && ($secondPos==".")){
                       return false;
                   }
               }
               return true;
           }
       ?>
</head>
    <body>
      <h3> Comprobar email resultado</h3>
      <?php
      if(!empty($_POST['email'])){
            $mail=$_POST['email'];
            esCorreo($mail);
      }else{
          print"<span>El email está vacío<span>";
      }
      ?>
      <br/>
      <a href="pagina1.php">Volver al inicio</a>
    </body>
</html>