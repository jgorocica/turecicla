<?php require_once("conexion.php");

$menu='index';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>www.turecicla.com</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $dato[0]; ?>img/favicon-turecicla.com.ico" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo $dato[0]; ?>css/base.css">
	<link rel="stylesheet" href="<?php echo $dato[0]; ?>css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
</head>
<body>
	
	<?php include('inc/header.php'); ?>
		
	<?php include('inc/menu.php'); ?>
	
	<?php include('slider/slider.php'); ?>

			<div class="contenedor fondo-blanc relleno-8 borde-gris" style="min-height: 600px">
			
			
			<div class="fila">
			
			<div class="columna columna-m-9 columna-g-9">
				<h1>inicio</h1>
			</div>
			
			<div class="columna columna-m-3 columna-g-3">
				<h1>iniciosidebar</h1>
			</div>
			
			</div>
			
			
			
			</div>
			
	<?php include('inc/footer.php'); ?>
		

	<script src="<?php echo $dato[0]; ?>js/base.js"></script>
	
</body>
</html>