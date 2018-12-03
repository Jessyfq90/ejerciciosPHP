<!DOCTYPE html>
<html>
    <head>
      <title></title>
      <meta charset="utf-8"/>
      <link href='../../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <h3>tabla numerada</h3>
        <?php
        if(!empty($_POST['numeradas'])&&!empty($_POST['columnas'])){
            $num=$_POST['numeradas'];
            $col=$_POST['columnas'];
            if($col>=$num){
            if( (($num>0)&&($num<11)) && (($col>0)&&($col<11)) ){
            //Se muestra la tabla
                $cont=0;
                 print"<table>";
                 print"<tr >";
                for($i=0;$i<$col;$i++){
                    if($num>$cont){
                        //print"El contador es $cont";
                        $cont+=1;
                        print"<td class='peques'>$cont</td>";
                    }else{
                        print"<td class='peques'> </td>";
                    }

                }
                print"</tr>";
                print"</table>";
            }else{
                print"<span style='color: red'>Ambos números deben estar entre 0 y 10</span>";
            }
            }else{
                print"<span style='color: red'>El número de columnas debe ser mayor o igual que el de numeradas</span>";
            }

        }else{
            print"<span style='color: red'>Tienes que escribir ambos números</span>";
        }
        ?>
        <br/><a href="pagina1.php">Volver al formulario</a>
    </body>
</html>