<?php require_once("../conexion.php");

//subir imagen
$nombre_imagen = $_FILES['imagen1']['name'];
	move_uploaded_file($_FILES['imagen1']['tmp_name'], "../img/upload/".$nombre_imagen);
	
//insertar registros
$insertSQL = sprintf("INSERT INTO posts (titulo, imagen, mensaje, autor,) VALUES (%s, %s, %s, %s)",
					GetSQLValueString($_POST['titulo'], "text"),
					GetSQLValueString($nombre_imagen, "text"),
					GetSQLValueString($_POST['mensaje'], "text"),
					GetSQLValueString($_SESSION['iduser'], "int"));
					
		
	mysql_select_db($database_conexion, $conexion);
		$Result1 = mysgl_query($insertSQL, $conexion) or die(mysql_error());
		
//Regresar a la pagina principal
	header('location:'.$dato['0']);
		

?>