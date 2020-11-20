<?php 
include("../conexion.php");
$idReserva = $_POST['idReserva'];
$pago = $_POST['pago'];

$sql = "UPDATE datosreserva SET pagoreserva = $pago WHERE idReserva = $idReserva";
$sql2="UPDATE datosreserva SET estado = 2 WHERE idReserva = $idReserva";

$query = mysqli_query($conexion,$sql);
$query2 = mysqli_query($conexion,$sql2);

?>