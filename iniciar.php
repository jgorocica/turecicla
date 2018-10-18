<?php require_once("conexion.php");

$menu='iniciar';

if(isset($_SESSION['iduser'])) header('location:'.$dato[0]);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar</title>
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
				<h1>Bienvenido a tu perfil</h1>


				<form onsubmit="return false" class="formulario" id="formInicio" style="max-width: 300px">

					<div class="formulario-grupo">
					<label for="user">Usuario o email</label>
					<input type="text" name="user" id="user" placeholder="usuario o email...">
					</div>

					<div class="formulario-grupo">
					<label for="pass">Contraseña</label>
					<input type="password" name="pass" id="pass" placeholder="Contraseña...">
					</div>
					
					<div class="formulario-grupo">
					
					<div class="recordarme">
					<input type="checkbox" name="recordar" id="recordar" checked> <label for="recordar">Recordar sesión</label>
					</div>
					
					</div>

				

					<div class="formulario-grupo oculto" id="login-error">
					<div class="alerta alerta-rojo alerta-pequenia" id="login-mensaje">Error</div>
					</div>

					<div class="formulario-grupo">
					<input type="submit" value="Iniciar" class="boton boton-verde derecha" onclick="login_ajax(user.value, pass.value);">
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