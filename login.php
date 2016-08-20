<?php
session_start();
?>

<!-- <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> TALLER CRUD COMPLETO XAVIER AGUIRRE </title>
</head>
<body>
<header>
</header>
<section id="main">   -->
	<?php
		$_SESSION['usuario'] = $_POST['Usuario'];
		echo "Bienvenido estimado(a): " .$_SESSION['usuario'];
	?>
<!--	<a href="logout.php">Cerrar sesión</a>
</section>
</body>
</html>   -->
