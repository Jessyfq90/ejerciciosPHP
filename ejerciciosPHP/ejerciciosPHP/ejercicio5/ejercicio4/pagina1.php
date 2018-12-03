<!DOCTYPE html>
<html>
    <head>
      <title>Ejercicio 4 página 1</title>
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
        <h3>Convertidor de temperaturas Celsius /Fahrenheit - Formulario</h3>
        <form action="pagina2.php" method="post">
          <fieldset>
          <legend>Formulario</legend>
          Escriba una temperatura en grados Celsius o Fahrenheit y la convertirá
          a la otra unidad (Celsius o Fahrenheit)
          <table>
            <tr>
              <td> Temperatura</td>
              <td> <input type="text" size="3" name="temp" id="temp" value="" pattern="[0-9]*[.]{0,1}[0-9]*" onKeyPress="return pulsar(event)"/></td>
               <td>
                  <select name="tipo">
                      <option value="C" selected="selected">Celsius</option>
                      <option value="F">Fahrenreit</option>
                  </select>
              </td>
            </tr>
          </table>
          <input type="submit" name="conver" value="convertir"/>
          </fieldset>
        </form>
    </body>
</html>