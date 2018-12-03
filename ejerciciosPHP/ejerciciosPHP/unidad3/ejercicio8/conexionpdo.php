<?php
try{

    $conexion = new PDO('mysql:host=localhost;dbname=almacen', 'root','');
    $conexion->query("SET NAMES utf8");
}catch (PDOException $e){
    print "<span>Error al conectar con la base de datos.</span>";
}
?>