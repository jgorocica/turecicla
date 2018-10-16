<?php require_once('../conexion.php');

//validar formulario
if(!isset($_POST['user']) || $_POST['user']=='' || $_POST['correo']=='' || $_POST['pass1']=='') exit;

//Comprobar correo
//CONSULTA A LA BASE DE DATOS
$accion_email=sprintf("SELECT * FROM users WHERE email=%s",
	formatearcadena($_POST['correo'],'text'));

$consulta_email=mysqli_query($conexion,$accion_email);
$datos_email=mysqli_fetch_assoc($consulta_email);
$cantidad_email=mysqli_num_rows($consulta_email);

if($cantidad_email==0){	
	//INSERTAR USER
	$accion_adduser = sprintf("INSERT INTO users (user, email, password) VALUES (%s, %s, %s)",
	formatearcadena($_POST['user'],'text'),
	formatearcadena($_POST['correo'],'text'),
	formatearcadena(md5($_POST['pass1']),'text'));
	
	$consulta_adduser = mysqli_query($conexion,$accion_adduser) or die(mysqli_error());
	
	echo 'correcto';
}
else echo 'existe';

mysqli_free_result($consulta_email);

?>