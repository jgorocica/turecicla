<?php require_once("conexion.php");

if(isset($_GET['cerrar'])) || $_GET['cerrar']!='yes') exit;

	$SESSION['iduser']=null;
	$SESSION['nombreuser']=null;
	
	unset($SESSION['iduser']);
	unset($SESSION['nombreuser']);
	
	session_destroy();
	
	heather('Location:'.$dato[0]);
	
	exit;

?>