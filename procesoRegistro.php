<?php 
	require("conexion.php");
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$telefono = $_POST['telefono'];
	
	mysqli_query($conexion, "INSERT INTO usuarios(nombre,apellido,email,password,telefono,fechaRegistro) VALUES('$nombre', '$apellido','$email',SHA('$password'),'$telefono', NOW())");


	mysqli_close($conexion);


?>