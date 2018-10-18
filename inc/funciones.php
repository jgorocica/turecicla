<?php

function formatearcadena($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  //Iniciamos la variable $conexion
  global $conexion;

  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  //Agregamos $conexion en las funciones mysqli_real_escape_string y mysqli_escape_string
  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($conexion,$theValue) : mysqli_escape_string($conexion,$theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$menu='';


//CONSULTA A LA TABLA DATOS
$accion_web="SELECT * FROM datos";
$consulta_web=mysqli_query($conexion,$accion_web);
$datos_web=mysqli_fetch_assoc($consulta_web);
$cantidad_web=mysqli_num_rows($consulta_web);

//var_dump($datos_web);

$dato=array($datos_web['url'], $datos_web['email'], $datos_web['titulo']);


mysqli_free_result($consulta_web);

//Auto login
if(isset($_COOKIE['idcookie']) && isset($_COOKIE['nombrecookie']) && !isset($_SESSION['iduser'])){
		
		$_SESSION['iduser']=$_COOKIE['idcookie'];
	    $_SESSION['nombreuser']=$_COOKIE['nombrecookie'];
		
}

?>