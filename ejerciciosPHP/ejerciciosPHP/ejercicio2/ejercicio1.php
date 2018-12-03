

<?php
include"../cabecera.php";
            echo"       <h1>Ejercicio 1</h1>\n";
            function devuelve_cadena() {
                $cadena="soy una cadena devuelta";
                return $cadena;
            }

            $lee=devuelve_cadena();
            echo"       La cadena que devuelve es: $lee\n";
?>
    </body>
</html>