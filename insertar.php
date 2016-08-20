<?php
require_once 'demoColector.php';
require_once 'demo.php';

$varNombre = $_GET['nombre'];
$NON = "";
$path = $_GET['imagen'];
$NON ="../Fotos/";
$NON= $NON . $path;
echo "<br>";

$alm = new demo();
$model = new demoColector();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>INSERTAR</title>       
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        
                    </thead>
					
					
                </table>     
			<span>
				<?php  
					$model->InsertDEMO($varNombre, $NON);
					echo "se inserto registro, ejecute la consulta para verificar";
				?>
			</span>
			<a href="DemoList.php">volver</a>
            </div>
        </div>

    </body>
</html>
