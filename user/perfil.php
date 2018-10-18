<?php require_once("../conexion.php");

$menu='perfil';

if(!isset($_SESSION['iduser'])) header('Location:'.$dato[0]);

$iduser=$_SESSION['iduser'];

//consultar datos del user
$accion_perfil="SELECT * FROM users WHERE id=$iduser";
$consulta_perfil=mysqli_query($conexion,$accion_perfil);
$datos_perfil=mysqli_fetch_assoc($consulta_perfil);
$cantidad_perfil=mysqli_num_rows($consulta_perfil);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mi perfil</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $dato[0]; ?>img/favicon-turecicla.com.ico" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo $dato[0]; ?>css/base.css">
	<link rel="stylesheet" href="<?php echo $dato[0]; ?>css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
</head>
<body>
	
	<?php include('../inc/header.php'); ?>
		
	<?php include('../inc/menu.php'); ?>

			<div class="contenedor fondo-blanc relleno-8 borde-gris" style="min-height: 600px">
			
			
			<div class="fila">
			
			<div class="columna columna-m-9 columna-g-9">
				<h1>Mi perfil</h1>
				<img id="imagenavatar" src="<?php echo $dato[0]; ?>user/avatar/<?php echo $datos_perfil['avatar']; ?>" alt="<?php echo $datos_perfil['user']; ?>">
				
				
				
				<br>
				<a onclick="$('#imagenavatar').click();" class="boton boton-pequenio boton-azul">Subir avatar</a>
				
				<form onsubmit="return false" id="formAvatar" class="oculto">
					<input type="file" name="imagenavatar" id="imagenavatar" onchange="subir_avatar();">
				</form>				
				
				
				<br>
				<strong>Nombre:</strong><?php echo $datos_perfil['user']; ?>
			</div>
			
			<div class="columna columna-m-3 columna-g-3">
				<h1>iniciosidebar</h1>
			</div>
			
			</div>
			
			
			
			</div>
			
	<?php include('../inc/footer.php'); ?>
		

	<script src="<?php echo $dato[0]; ?>js/base.js"></script>
	<script src="<?php echo $dato[0]; ?>js/efectos.js"></script>
</body>
</html>
<?php mysqli_free_result($consulta_perfil); ?>