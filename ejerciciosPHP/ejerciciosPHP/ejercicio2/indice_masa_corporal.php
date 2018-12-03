<?php
function indice_masa_corporal($peso,$altura){
    $indice=$peso/(pow($altura,2));
    return $indice;
}
?>