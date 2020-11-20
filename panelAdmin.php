<?php 
include("../conexion.php");
include("../sesion-verificar.php");
haySesion();

if($_SESSION['ingreso']['admin']){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<style>
		body{
			background-image: url('bgPanel.jpg');
		}
		.logo{
			position: relative;
			top:10%;
			left:47%;
			height: 80px;
			width: 110px;
		}

		.cerrarsesion{
		  position: absolute;
		  top:20px;
		  right: 10px;
		}
	</style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href='img/logo.png' rel='shortcut icon' type='image/png'>
</head>
<body>
	<a href="cerrarSesion.php" class="cerrarsesion"><img src="cerrarsesion.png" width="200px" height="40px"></a>
	<img src="logo.png" class="logo">




 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>
<?php 
}else echo "No autorizado";
 ?>