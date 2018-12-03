
<!DOCTYPE html>
    <html>
        <head>
            <title> ejercicio 4_8</title>
            <link href='../estilos/ejer4.css' rel='stylesheet' type='text/css'  />
            <link href='../estilos/frutas.css' rel='stylesheet' type='text/css'  />
            <meta http-equiv="refresh" content="5"/>
        </head>
        <body>
            <h1> ejercicio 4_8 </h1>
<?php
//include "ejercicio0.php";
//echo cabecera("ejercicio 4_8");

$frutas=array("'./Frutas/fresa.jpg'","'./Frutas/grosella.jpg'","'./Frutas/guayaba.jpg'","'./Frutas/kiwi.jpg'","'./Frutas/manzana.jpg'","'./Frutas/melocoton.jpg'","'./Frutas/naranja.jpg'","'./Frutas/pera.jpg'");
shuffle($frutas);
echo"           <table>\n";
echo"               <caption>Refresca Frutas cada 5 segundos</caption>\n";
$longitud=count($frutas);

echo"               <tr>\n";
for($i=0;$i<($longitud/2);$i++){
    echo"                   <td><img src=$frutas[$i]/></td>\n";
}
echo"               </tr>\n";

echo"               <tr>\n";
for($i=($longitud/2);$i<$longitud;$i++){
    echo"                   <td><img src=$frutas[$i]/></td>\n";
}
echo"               </tr>\n";

//     echo"<tr>\n";
//     echo"<td><img src=$frutas[0]/></td>\n";
//         echo"<td><img src=$frutas[1]/></td>\n";
//         echo"<td><img src=$frutas[2]/></td>\n";
//         echo"<td><img src=$frutas[3]/></td>\n";
//     echo"</tr>\n";

//     echo"<tr>\n";
//         echo"<td>$frutas[4]</td>\n";
//         echo"<td>$frutas[5]</td>\n";
//         echo"<td>$frutas[6]</td>\n";
//         echo"<td>$frutas[7]</td>\n";
//     echo"</tr>\n";

echo"           </table>\n";
?>
      </body>
</html>