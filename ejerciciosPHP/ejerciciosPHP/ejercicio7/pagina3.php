<!DOCTYPE html>
<html>
    <head>
		<title>Ejercicio7_1 pagina3</title>
		<meta charset="utf-8"/>
        <link href='../estilos/ejer5.css' rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<h3>RECETAS DE COCINA</h3>


		<?php
		if(empty($_POST['realizacion'])){
			print"<span>No ha introducido la realización de la receta</span>";
		}else if(!empty($_POST['realizacion'])){
		    if(empty($_POST['nombre'])){
                print"<span>No ha introducido el nombre</span>";
		    }else if(!empty($_POST['nombre'])){
        			if(!empty($_POST['ingre'])){
        			    if(!empty($_POST['cant'])){
        			        if(!empty($_POST['unit'])){

                			    $ingredientes=$_POST['ingre'];
                			    $cantidades=$_POST['cant'];
                			    $unidades=$_POST['unit'];
                			    $nulo=false;
                			    for($i=0;$i<count($ingredientes);$i++){
                			        if($ingredientes[$i]==null ||$cantidades[$i]==null || $unidades[$i]==null){
                			         print"<span>Faltan datos de los ingredientes</span><br/>";
                			         $nulo=true;
                			         break;
                			        }

                			    }
                			    if($nulo==false){
                                    $unitBien=true;
                			        //unidades solo pueden ser gr. ud. y c
                			        for($i=0;$i<count($unidades);$i++){
                			            if($unidades[$i]!="c" && $unidades[$i]!="ud" && $unidades[$i]!="gr"){
                			             $unitBien=false;
                			             break;
                			            }
                			        }
                			        if($unitBien){
                    			        print"<p>Receta incorporada</p>\n";
                    			        $nombre=$_POST['nombre'];
                    			        print"           Receta de <span class='negrita'>$nombre</span>\n";
                    			        print"           <ul>\n";
                        			    for($i=0;$i<count($ingredientes);$i++){
                        			        print"             <li>$ingredientes[$i] - $cantidades[$i] - $unidades[$i]</li>\n";
                        			    }
                        			    print"           </ul>\n";
                        			    $realiza=$_POST['realizacion'];
                        			    print"        Realización: <br/> $realiza\n";
                			        }else if(!$unitBien){
                			         print"<span>Has introducido unidades erroneas. Solo se permiten gr, c y ud.</span><br/>\n";
                			        }
                			    }
        			        }
        			    }
        			}
		        }
		}

		?>
        <br/>
        <a href="pagina1.php">Volver al inicio</a>
	</body>
</html>