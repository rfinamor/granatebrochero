<?php 
include("../conexion.php");
$idReserva = $_GET['id'];

$sql = "UPDATE datosreserva SET estado = 1 WHERE idReserva = $idReserva";

$query = mysqli_query($conexion,$sql);

header("Location: reservasPendientes.php");

?>