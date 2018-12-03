<html>
    <head>
      <title></title>
      <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            setlocale(LC_ALL,"es_ES","esp");
            date_default_timezone_set('Europe/Madrid');
            $hora=strftime("%H");
            $minuto=strftime("%M");
            $segundo=strftime("%S");
            $dia=strftime("%d");
            $mes=strftime("%B");
            $anio=strftime("%Y");
            $diaAnio=strftime("%j");
            echo"Cuando se cargó esta página eran las $hora:$minuto:$segundo
del día $dia de $mes de $anio.<br/>";
            echo"Es el dia $diaAnio del año.";
        ?>
    </body>
</html>