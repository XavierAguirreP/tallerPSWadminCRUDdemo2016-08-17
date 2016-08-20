<?php
require_once 'demoColector.php';
require_once 'demo.php';

$alm = new demo();
$model = new demoColector();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>inicio</title>       
	</head>
	<form id="formularioDemo" action="insertar.php" method="get">
		<p>Nombre: <input type="text" name="nombre" /></p>
		<label for="imagen">Imagen:</label>
		<input id="imagen" name="imagen" size="30" type="file" />
		<p><input type="submit" name="guardar" value ="guardar"></p>
		<br>
		<a href="DemoList.php">volver</a>
	</form>
	</form>

</html>
