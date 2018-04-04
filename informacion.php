<?php
	$usuario = $_REQUEST['usuario'];
	$password = $_REQUEST['password'];

	//echo("$usuario   , $password");



	include 'conexion.php';
	$query="SELECT * FROM Usuarios";
	$resultado = $mysqli->query($query);

	if ($resultado->num_rows > 0) {
		header("location:index2.html");
	}
	else{
		echo("Pagina no encontrada");
	
	}
?>
