<?php
    include"../conexionpdo.php";
    $codProducto=$_GET['codigo'];//codigo del producto para editar
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Unidad 3 ejercicio 8_1 pagina2</title>
        <meta charset="utf-8"/>
        <link href='../../estilos/ejer8.css' rel="stylesheet" type="text/css"/>
    </head>
    <body>
      <header>
      <?php

    print"<h1>Llego a la página dos con el codigo: $codProducto</h1>";

    ?>
      </header>
      <main>
        <form action="" method="post">

<?php


?>
      </form>
    </main>
    <footer>


    </footer>
    </body>
</html>