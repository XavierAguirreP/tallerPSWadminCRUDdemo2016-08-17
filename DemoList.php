<?php
	session_start();
?>
<?php
	require_once 'demoColector.php';
	require_once 'conexion.php';
	require_once 'demo.php';

	$alm = new demo();
	$model = new demoColector();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Administracion DEMO</title>       
	</head>
    <body style="padding:15px;">

	<h2>ADMINISTRACION DEMO</h2>

	<a href='formularioDemo.php'>Create</a>
	<br />

        <div class="pure-g">
            <div class="pure-u-1-12">
                               

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">id_demo</th>
                            <th style="text-align:left;">nombre</th>
                            <th style="text-align:left;">foto</th>
                            <th style="text-align:left;">opcion</th>
                            <th style="text-align:left;">opcion</th>
                        </tr>
                    </thead>
                    <?php foreach($model->ListarDEMO() as $r): ?>
                        <tr>
                            <td><?php echo $r->getid_demo(); ?></td>
                            <td><?php echo $r->getNombre(); ?></td>
			    <td><?php echo $r->getFoto();?></td>  
			    <td><a href="formularioActualizar.php?id=<?php echo $r->getid_demo(); ?>&nombre=<?php echo $r->getNombre();?>">Update</a></td>
			    <td><a href="borrar.php?id=<?php echo $r->getid_demo(); ?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
