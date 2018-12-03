<!DOCTYPE html>
<html>
    <head>
      <title>Página 1 ejercicio 5_2</title>
      <meta charset="utf-8"/>
      <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <?php
    if(!empty($_POST['numeradas'])&& !empty($_POST['columnas'])){

    }
    //color lila:#D8CEF6
    ?>
    <h3>Tabla numerada - Formulario</h3>
    <form  name="tabla" action="pagina2.php"  method="post">
        <fieldset>
          <legend>Formulario</legend>
          Escriba dos números y dibujaré una tabla con el número de columnas
          (0&lt;columnas&lt;=10) que indique y con las primeras celdas numeradas (0&lt;numeradas&lt;=10)
          <br/>
          <table>
            <tr>
              <td> Número de celdas numeradas</td>
              <td><input type="text" name="numeradas" size="2" value="" pattern="[0-9]"/></td>
            </tr>
            <tr>
              <td>Número de columnas</td>
              <td><input type="text" name="columnas" size="2" value="" pattern="[0-9]"/></td>
            </tr>
          </table>
          <input type="submit" value="Escribir" name="escribir"/>
          <input type="reset" value="Borrar"/>
        </fieldset>
    </form>
    </body>
</html>