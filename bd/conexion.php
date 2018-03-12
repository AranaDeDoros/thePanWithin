<?php 
	include_once "parametros.php";

	$cn = new mysqli(SERVER, USER, PASSWORD, DB);
	// Comprobamos la conexion 
	if ($cn->connect_errno) {
	    echo "Fallo al conectar a MySQL: (" . $cn->connect_errno . ") " . $cn->connect_error;
	    die();
	} else {
	//	echo "CONEXIÓN ESTABLECIDA";
	}

	//$tildes = $cn->query("SET NAMES 'utf8'");

 ?>