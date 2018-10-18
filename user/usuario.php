<?php require_once("../conexion.php");

$menu='usuario';

if(!isset($_GET['iduser'])) header('Location:'.$dato[0]);

$iduser=$_SESSION['iduser'];

//consultar datos del user
$accion_usuario="SELECT * FROM users WHERE id=$iduser";
$consulta_usuario=mysqli_query($conexion,$accion_usuario);
$datos_usuario=mysqli_fetch_assoc($consulta_usuario);
$cantidad_usuario=mysqli_num_rows($consulta_usuario);

if($cantidad_usuario==0) header('Location:'.$dato[0]);

if(datos_usuario['id']==$_SESSION['iduser']) header('Location:'.$dato[0].'user/perfil');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perfil de</title>
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
				<h1>Mi perfil <?php echo $datos_usuario['user']; ?></h1>
				<img src="<?php echo $dato[0]; ?>user/avatar/<?php echo $datos_usuario['avatar']; ?>" alt="<?php echo $datos_usuario['user']; ?>">
				<br>
				<strong>Nombre:</strong><?php echo $datos_usuario['user']; ?>
			</div>
			
			<div class="columna columna-m-3 columna-g-3">
				<h1>iniciosidebar</h1>
			</div>
			
			</div>
			
			
			
			</div>
			
	<?php include('../inc/footer.php'); ?>
		

	<script src="<?php echo $dato[0]; ?>js/base.js"></script>
	
</body>
</html>
<?php mysqli_free_result($consulta_usuario); ?>