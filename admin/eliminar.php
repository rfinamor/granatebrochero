<?php 
include("../conexion.php");
$idReserva = $_GET['id'];
$confirmadas = $_GET['confirmadas']; 
$cabana = $_GET['cabana']; 

$table = 'reserva'.$cabana;

$sql1 = "DELETE FROM datosreserva WHERE idReserva = $idReserva";
$sql2 = "DELETE FROM $table WHERE idReserva = $idReserva";

$query1 = mysqli_query($conexion,$sql1);
$query2 = mysqli_query($conexion,$sql2);

if($confirmadas==1){
 header("Location: reservasConfirmadas.php");
}else header("Location: reservasPendientes.php");

?>