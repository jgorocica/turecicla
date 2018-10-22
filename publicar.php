<?php require_once("conexion.php");

$menu='publicar';

if (!isset($_SESSION['iduser'])){
	header('location:'.$dato['0']);
	}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>publicar</title>
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
	

			<div class="contenedor fondo-blanc relleno-8 borde-gris" style="min-height: 800px">
			
			
			<div class="fila">
			
			<div class="columna columna-m-9 columna-g-9">
				<h1>Publica tu anuncio aquí</h1><br>
										
			<form name="miform" action="inc/process.php" class="formulario" id="formpublicar" style="max-width: 300px">
				
				<div class="formulario-grup mi_titulo">
					<label for="user" class="mi_titulo">Titulo</label>
					<input type="text" name="titulo" id="titulo" placeholder="Titulo...">
				</div>
				
				<div class="formulario-grup">
					<label for="user">Imagen</label>
					<input type="file" name="imagen1" id="imagen1" placeholder="Imagen...">
				</div>
				
				<div class="formulario-grupo mi_textarea">
					<label for="user">Descripción</label>
					<textarea name="mensaje" id="mensaje" class="mi_textarea"></textarea>
				</div>
				
				<div class="formulario-grupo">
					<label for="user">Precio</label>
					<input type="text" name="precio" id="precio" placeholder="Precio al mayor...">
				</div>
				
				<div class="formulario-grupo">
					<label for="user">Dirección</label>
					<input type="text" name="direccion" id="direccion" placeholder="Dirección...">
				</div>
				
				<div class="formulario-grupo">
					<label for="user">Ciudad</label>
					<input type="text" name="ciudad" id="ciudad" placeholder="Ciudad...">
				</div>
				
				<div class="formulario-grupo">
					<label for="user">Estado</label>
					<input type="text" name="estado" id="estado" placeholder="Estado...">
				</div>
				
				<div class="formulario-grupo">
					<label for="user">País</label>
					<input type="text" name="pais" id="pais" placeholder="País...">
				</div>
				
				<div class="formulario-grupo">
					<label for="user">Telefono</label>
					<input type="text" name="telefono" id="telefono" placeholder="Telefono...">
				</div>
				
				<div class="formulario-grupo">
					<input type="submit" value="Publicar" class="boton boton-verde izquierda">
				</div>
							
			</form>	
				
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