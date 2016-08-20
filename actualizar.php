<?php
require_once 'demoColector.php';
require_once 'demo.php';

$varId = $_GET['id'];
$varNombre = $_GET['nombre'];

$alm = new demo();
$model = new demoColector();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ejemplo moni eliminar</title>       
	</head>
    <body style="padding:15px;">

                <?php
			$model->UpdateDEMO($varNombre, $varId);
			echo "se actualizo registro, ejecute la consulta para verificar";
		?>
		<a href="DemoList.php">volver</a>
 
    </body>
</html>
