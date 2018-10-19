<?php

//mantener la sesion activa
if(!isset($_SESSION)) session_start();

//CONEXIÓN A LA BASE DE DATOS
$hostname_db = "localhost";
$database_db = "turecicla";
$username_db = "root";
$password_db = "root";
//Conectar a la base de datos
$conexion = mysqli_connect($hostname_db, $username_db, $password_db);
//Seleccionar la base de datos
mysqli_select_db($conexion,$database_db) or die ("Ninguna DB seleccionada");

include('inc/funciones.php');


?>