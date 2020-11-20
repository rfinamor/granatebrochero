<?php 
	require("conexion.php");
	include("sesion-verificar.php");
	haySesion();

	$idUsuario = $_SESSION['ingreso']['idUsuario'];

	//idUsuario = mysql_fetch_assoc(mysqli_query($conexion,"SELECT idUsuario FROM usuarios WHERE idUsuario = $_SESSION['ingreso'] "))


	$cabana = $_POST['cabana'];
	$precio = $_POST['precio'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];
	$celular = $_POST['celular'];
	$cantadultos = $_POST['cantadultos'];
	$cantmenores = $_POST['cantmenores'];
	$idreserva = $_POST['idreserva'];
	$fechadesde = $_POST['fechadesde']; 
	$fechahasta =  $_POST['fechahasta'];

	$tablareserva = 'reserva'.$cabana;


	$sql = "INSERT INTO datosreserva (idReserva,cabana, fechaIn, fechaOut, nombre, apellido, edad, celular, cantadultos, cantmenores,precio, idUsuario) VALUES ($idreserva, $cabana, '$fechadesde', '$fechahasta', '$nombre', '$apellido', '$edad', '$celular', '$cantadultos', '$cantmenores','$precio', $idUsuario)";

	$result = mysqli_query($conexion,$sql);

	if($result){
		$resultado = 1;
		
	}else{
		$result2 = mysqli_query($conexion,"DELETE datosreserva, $tabladatos FROM $tablareserva INNER JOIN $tabladatos ON $tablareserva.idReserva = $tabladatos.idReserva WHERE $tabladatos.idReserva = $idreserva");
		$resultado = 0;
		
	}

echo $resultado;


?>