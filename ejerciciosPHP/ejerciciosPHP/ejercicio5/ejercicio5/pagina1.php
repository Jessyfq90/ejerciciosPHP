<!DOCTYPE html>
<html>
    <head>
      <title>Ejercicio 5 página 1</title>
      <meta charset="utf-8"/>
      <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
      <script>
          function pulsar(e){
                tecla = (document.all) ? e.keyCode :e.which;
                return tecla!=13;
            }
      </script>
    </head>
    <body>
        <h3> Comprobar email - Formulario</h3>
        <form action="pagina2.php" method="post">
            <fieldset>
              <legend>Formulario</legend>
               <table>
              <tr>
                <td> email</td>
                <td> <input type="text" name="email" id="email" value="" pattern="[0-9a-zA-Z.]*@[0-9a-zA-Z.]+.[a-zA-Z]" onKeyPress="return pulsar(event)"/></td>
              </tr>

            </table>
           </fieldset>
          <input type="submit" name="comprobar" value="comprobar"/>

        </form>

    </body>
</html>