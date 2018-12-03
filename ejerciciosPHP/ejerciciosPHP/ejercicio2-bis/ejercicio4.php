<?php
include"../cabecera.php";
$cadena="Vamos Al cine";
echo"   <table>\n";
echo"       <tr>\n";
echo"           <th>frase</th>\n";
echo"           <th>$cadena</th>\n";
echo"       </tr>\n";

echo"       <tr>\n";
echo"           <td>strtoupper(frase)</td>\n";
echo"           <td>".strtoupper($cadena)."</td>\n";
echo"       </tr>\n";

echo"       <tr>\n";
echo"           <td>strtolower(frase)</td>\n";
echo"           <td>".strtolower($cadena)."</td>\n";
echo"       </tr>\n";

echo"       <tr>\n";
echo"           <td>ucfirst(frase)</td>\n";
echo"           <td>".ucfirst($cadena)."</td>\n";
echo"       </tr>\n";

echo"       <tr>\n";
echo"           <td>ucwords(frase)</td>\n";
echo"           <td>".ucwords($cadena)."</td>\n";
echo"       </tr>\n";
echo"   </table>\n";
?>
   </body>
</html>