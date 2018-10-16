<?php require_once('../conexion.php');

//validar formulario
if(!isset($_POST['user']) || $_POST['user']=='' || $_POST['pass']=='') exit;

//Comprobar cuenta usuario
$accion_login=sprintf("SELECT * FROM users WHERE user=%s and password=%s",
	formatearcadena($_POST['user'],'text'),
	formatearcadena(md5($_POST['pass']),'text'));

$consulta_login=mysqli_query($conexion,$accion_login);
$datos_login=mysqli_fetch_assoc($consulta_login);
$cantidad_login=mysqli_num_rows($consulta_login);

if($cantidad_login==1){	
		
	$SESSION['iduser']=$datos_login['id'];
	$SESSION['nombreuser']=$datos_login['user'];
	echo 'correcto';
}
else echo 'error';

mysqli_free_result($consulta_login);

?>