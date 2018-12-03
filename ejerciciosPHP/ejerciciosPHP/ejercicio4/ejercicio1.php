<?php
include "ejercicio0.php";

echo cabecera("ejercicio 4_1");
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
                        echo"           <h1>SI ES UN CORREO ELECTRÓNICO: $cadena</h1>\n";
                        return true;
                    }
                }
            }
        }
      }
      echo"         <h1>NO ES UN CORREO ELECTRÓNICO: $cadena</h1>\n";
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


//$cad="hola.soy.una@prueba.es";
$cad="a.b.c@pepe.n.com";

esCorreo($cad);
?>
      </body>
</html>