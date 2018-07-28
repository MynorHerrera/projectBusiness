<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyecto</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="icon" href="images/logo.png">
	<link rel="stylesheet" href="css/fontello.css">
	<link rel="stylesheet" href="css/subir.css">
		<style>
		p{
			text-align: center;
		}

		.pie{
			margin-top: 30px;
		}
		</style>
</head>
<body>
	<header class="cabecera">
		<h1>Municipalidad de Cuilapa</h1>
	</header>
	<div id="menu">
		<h1>Subir Fotos y Videos</h1>
	</div>
	<section class="upload">
	<form class="form" method="post" action="index.php" enctype="multipart/form-data">
				<div class="content-file">
					<input type="file" class="form-control" name="archivo[]" multiple="" required>
					<input class="fecha" type="date" value="<?php echo date("Y-m-d");?>" name="date">	
				</div>			
					<input type="submit" class="btn" name="Subir" value="Subir">		
				
	</form>
	</section>
	<?php
	include("upload.php");
	?>

	<footer class="pie">
		<small>Todos los derechos reservados</small>
		<small>Copyright © 2018 | by Nombre de la empresa</small> 
	</footer>
</body>
</html>