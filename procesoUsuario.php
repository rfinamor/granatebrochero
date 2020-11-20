<?php 
session_start();
require("conexion.php");

$email = $_POST['email'];
$password = $_POST['password'];



$consulta = mysqli_query($conexion, "SELECT idUsuario, email,admin FROM usuarios WHERE email = '$email' AND password = SHA('$password')");

//var_dump($consulta);
$resultado = mysqli_fetch_assoc($consulta);

//if ($resultado['admin'] == 1){
	//$_SESSION['admin'] = true;
//}



if($resultado){
	//echo 'hay login';
	$_SESSION['ingreso'] = $resultado;

	//printf("<script type='text/javascript'>alert('Lo estamos redireccionando'); </script>"); 
	//header("Location:panelUsuario.php");
	//echo "usuario OK" ;  

	echo json_encode([
		"success" => true
	]);

}else{
	//echo 'NO hay login';
	//printf("<script type='text/javascript'>alert('Error usuario/contraseña');</script>");
	//echo "error usuario" ;  
	//header("Location:iniciar-sesion.php?error");

	echo json_encode([
		"success" => false,
		"code" => 1
	]);
}



?>