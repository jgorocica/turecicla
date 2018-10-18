<?php require_once("conexion.php");

$menu='registro';

if(isset($_SESSION['iduser'])) header('location:'.$dato[0]);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registro</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon-turecicla.com.ico" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>
<body>

	<?php include('inc/header.php'); ?>

	<?php include('inc/menu.php'); ?>

			<div class="contenedor fondo-blanc relleno-8 borde-gris" style="min-height: 600px">


			<div class="fila">

			<div class="columna columna-m-9 columna-g-9">
				<h1>Registro</h1>


				<form onsubmit="return false" class="formulario" id="formRegistro" style="max-width: 300px">

					<div class="formulario-grupo">
					<label for="user">Usuario</label>
					<input type="text" name="user" id="user" placeholder="usuario...">
					</div>

					<div class="formulario-grupo">
					<label for="correo">Email</label>
					<input type="email" name="correo" id="correo" placeholder="correo...">
					</div>

					<div class="formulario-grupo">
					<label for="pass1">Contraseña</label>
					<input type="password" name="pass1" id="pass1" placeholder="contraseña...">
					</div>

					<div class="formulario-grupo">
					<label for="pass2">Repetir contraseña</label>
					<input type="password" name="pass2" id="pass2" placeholder="repetir contraseña...">
					</div>

					<div class="formulario-grupo oculto" id="registro-error">
					<div class="alerta alerta-rojo alerta-pequenia" id="registro-mensaje">Error</div>
					</div>

					<div class="formulario-grupo">
					<input type="submit" value="Registro" class="boton boton-verde derecha" onclick="registro_ajax(user.value, correo.value, pass1.value, pass2.value);">
					</div>


				</form>



			</div>

			<div class="columna columna-m-3 columna-g-3">
				<h1>iniciosidebar</h1>
			</div>

			</div>



			</div>

	<?php include('inc/footer.php'); ?>


	<script src="js/base.js"></script>
	<script src="js/efectos.js"></script>
</body>
</html>