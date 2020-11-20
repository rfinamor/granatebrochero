<?php
session_start();
function haySesion(){
	if(!isset($_SESSION['ingreso']) || empty($_SESSION['ingreso'])){
	header("Location:iniciar-sesion.php");
	}
}
?>

