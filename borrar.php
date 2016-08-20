<?php
require_once 'demoColector.php';
require_once 'demo.php';

$varID = $_GET['id'];

$alm = new demo();
$model = new demoColector();


?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ejemplo eliminar</title>       
	</head>
    <body style="padding:15px;">

                 <?php  $model->DeleteDEMO($varID);
			echo "recibi $varID";
		 ?>

		 <a href="DemoList.php">salir</a>
               
    </body>
</html>
