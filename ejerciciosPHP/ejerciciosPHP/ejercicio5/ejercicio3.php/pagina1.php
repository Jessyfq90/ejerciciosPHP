<!DOCTYPE html>
    <html>
    <head>
      <title>Ejercicio 3 página 1</title>
      <meta charset="utf-8"/>
      <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <h3>Calcula año bisiesto - Formulario</h3>
    <form action="pagina2.php" method="post">
      <fieldset>
        <legend>Formulario</legend>
        Escriba un año (0&lt;=año&gt;10000) y calculará si es bisiesto o no
        <br/>
        <table>
            <tr>
                <td>año</td>
                <td><input type="text" name="anio" id="anio" size="5" value="" pattern="[0-9]*"/></td>
                <?php
                if(isset($_POST['calcular'])&& empty($_POST['anio'])){
                    print"<span>Tienes que introducir un año</span>";
                }else if(isset($_POST['calcular'])&& !empty($_POST['anio']) ){
                    $anio=$_POST['anio'];
                    if ( $anio<0 || $anio>10000) {

                    print"<span>TEl año debe estar comprendido 0 y 10000</span>";
                    }
                }
                ?>
</tr>
        </table>
        <br/>
        <input type="submit" class="boton" name="calcular" value="Calcular"/>
        <input type="reset" class="boton" name="borrar" value="Borrar"/>
      </fieldset>
    </form>

    </body>
</html>