<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <title>Ejercicio8_3 pagina1</title>
       <meta charset="utf-8"/>
       <link href='../../estilos/ejer8_3_2.css' rel="stylesheet" type="text/css"/>
        <script>
            function pulsar(e){
                tecla = (document.all) ? e.keyCode :e.which;
                return tecla!=13;
            }
      </script>
       <?php
       if(!isset($_SESSION['visible'])){
         $array=array("Alava", "Bilbao","Madrid","Valencia","Zaragoza");
         $_SESSION['fin']="";
         $_SESSION['ini']="";
         $_SESSION['array']=$array;
         $_SESSION['visible']=true;

       }

      ?>


    </head>
    <body>
      <h3>EJERCICIO SOBRE ARRAYS</h3>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">



      <div id="izquierda">
      <input type="submit" id="extraeP" name="extraeP" value="Extrae del principio &lt;-" />

      <br/>
       <?php


      if(isset($_POST["extraeP"])){
          $valor7=array_shift($_SESSION['array']);//extraigo el primero
          $_SESSION['ini']=$valor7;
      }
      ?>
      <input type="text" id="valor1" name="valor1" value= "<?php echo $_SESSION['ini'];?>" onKeyPress="return pulsar(event)"/>

      <br/>
      <input type="submit" name="añadeF" value="Añade al final -&gt;"  />

      <?php
      if(isset($_POST["añadeF"])&& !empty($_POST['valor1'])){
          $valor4=array_push($_SESSION['array'], $_POST['valor1']);//meto un valor al final

      }else if(isset($_POST["añadeF"])&& empty($_POST['valor1'])){
          print"<span>Sin valor</span>";
      }
      ?>


      </div>
      <div id="derecho">

      <input type="submit" name="añadeP" value="&lt;- Añade al principio " />

       <?php
          if(isset($_POST["añadeP"])&& !empty($_POST['valor2'])){
              $valor3=array_unshift($_SESSION['array'], $_POST['valor2']);//meto un valor al principio

          }else if(isset($_POST["añadeP"])&& empty($_POST['valor2'])){
            print"<span>Sin valor</span>";
          }
      ?>
       <br/>
      <?php
          if(isset($_POST["extraeF"])){
              $valor5=array_pop($_SESSION['array']);//saco un valor dl final
              $_SESSION['fin']=$valor5;
          }
      ?>

      <input type="text" id="valor2" name="valor2" value="<?php echo $_SESSION['fin'];?>" onKeyPress="return pulsar(event)"/>
       <br/>
      <input type="submit" name="extraeF" value="-&gt; Extrae al final " />



      <br/>
      </div>
      <table class="tabla">
        <tr>
          <th>Posición</th>
          <th>Valor</th>
        </tr>
        <tr>
<?php
        //guardamos el array por primera vez en la sesion.
        foreach($_SESSION['array'] as $indice => $valor){
                print"      <tr>\n";
                print"          <td>$indice</td>\n";
                print"          <td>$valor</td>\n";
                print"      </tr>\n";
        }




        ?>
      </table>

      </form>

    </body>
</html>