<?php

require_once('../conexion.php');

//validar formulario
if(!isset($_POST['user']) || $_POST['user']=='' || $_POST['pass']=='') exit;

//Comprobar cuenta usuario
$accion_login=sprintf("SELECT * FROM users WHERE user=%s AND password=%s OR email=%s AND password=%s",
	formatearcadena($_POST['user'],'text'),
	formatearcadena(md5($_POST['pass']),'text'),
	formatearcadena($_POST['user'],'text'),
	formatearcadena(md5($_POST['pass']),'text'));

$consulta_login=mysqli_query($conexion,$accion_login);
$datos_login=mysqli_fetch_assoc($consulta_login);
$cantidad_login=mysqli_num_rows($consulta_login);

if($cantidad_login==1){	
		
	$_SESSION['iduser']=$datos_login['id'];
	$_SESSION['nombreuser']=$datos_login['user'];
	
	if(isset($_POST['recordar']) && $_POST['recordar']=='on'){
		//recordar la sesión
		setcookie('idcookie',$datos_login['id'],time()+30*24*60*60,'/');
	    setcookie('nombrecookie',$datos_login['user'],time()+30*24*60*60,'/'); 
	echo 'correcto';
	}
} else {
	echo 'error';
}

//mysqli_free_result($consulta_login);
?>