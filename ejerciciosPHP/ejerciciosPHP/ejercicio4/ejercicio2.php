<?php
include "ejercicio0.php";

echo cabecera("ejercicio 4_2");
$array= array("Roberto","juan","Marta","Mercedes","martín","Jorge","Miriam","Nanci","MIRTA");
foreach($array as $indice => $valor){
    if(($valor[0]=="m") || ($valor[0]=="M")){
        $copia[]=$valor;
    }
}
//print_r($copia);
echo"<h2>Lista de nombres que empiezan por m</h2>\n";
$resultado="";
foreach($copia as $indice =>$valor){
    $resultado.=ucwords(strtolower($valor)).",";
}
$resultado[strlen($resultado)-1]=".";
echo"$resultado\n";


?>
      </body>
</html>