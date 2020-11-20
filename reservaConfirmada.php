<?php 
include("conexion.php");
include("sesion-verificar.php");
haySesion();

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cabañas granate</title>
	<link rel="stylesheet" href="">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style>
		@media(min-width: 1200px){ 
		.container{
    		max-width: 1523px!important;
		}
		}
		.datoscabaña{
			text-align: center;
		}



		.container{
			background-color: #e6f4f569;
			width: 100%;
			padding: 0;
			margin-left: 10%;
			margin-right: 0;
			margin-top: 2%;
		}

		.row{

			
		}

		.clase1{
			padding-left: 35%;
		}


	</style>
</head>
<body>
	<?php 
		$query = "SELECT idReserva FROM reserva1 order by id desc limit 1";
		$resultado=mysqli_fetch_assoc(mysqli_query($conexion,$query));
		$idreserva = $resultado['idReserva'];
		$idUsuario = $_SESSION['ingreso']['idUsuario'];

		$sql = "SELECT * FROM datosreserva WHERE idUsuario = $idUsuario and idReserva = $idreserva";
		$reservado=mysqli_fetch_assoc(mysqli_query($conexion,$sql));

		$cabana = $reservado['cabana'];
		$nombre = $reservado['nombre'];
		$apellido = $reservado['apellido'];
		$edad = $reservado['edad'];
		$celular = $reservado['celular'];
		$cantadultos = $reservado['cantadultos'];
		$cantmenores = $reservado['cantmenores'];
		$idreserva = $reservado['idReserva'];
		$fechadesde = $reservado['fechaIn']; 
		$fechahasta =  $reservado['fechaOut'];
		$precio =  $reservado['precio'];

	 ?>


	<div class="datoscabaña">
		<h1>Cabañas Granate</h1>
		<p>Telefono: 1133764897 - Rodrigo</p>
		<p>Direccion: Sargento cabral y Caseros, Villa Cura Brochero, Cordoba</p>
		<p>Email: rodrigonfinamore@gmail.com</p>
	</div>
	<div style="width: 80%;margin:auto;height: 5px; background-color: grey;"></div>

	<div><img src="casa.png" width="70px" height="70px" style="margin-left: 48%;margin-top: 20px;"></div>

	<div style="width: 90%;margin:auto;height: 60px; background-color: #741919d6;margin-top: 50px;">
	
		<h2 style="padding-top: 15px;padding-left: 10px; color: white; font-size: 28px;">Datos de la reserva:</h2>

	</div>
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-6 clase1">
	 			<ul style="list-style: none;">
	 				<li>N° reserva</li>
					<li>Cabaña</li>
					<li>Nombre</li>
					<li>Apellido</li>
					<li>Telefono</li>
					<li>Adultos</li>
					<li>Menores</li>
					<li>Precio</li>
					<li>Ingreso</li>
					<li>Salida</li>
				</ul>
   			</div>
    		<div class="col-6" >
    			<ul style="list-style: none;">

					<li><?php echo $idreserva ?></li>
					<li><?php echo $cabana ?></li>
					<li><?php echo $nombre ?></li>
					<li><?php echo $apellido ?></li>
					<li><?php echo $celular ?></li>
					<li><?php echo $cantadultos ?></li>
					<li><?php echo $cantmenores ?></li>
					<li style="font-weight: bold;"><?php echo $precio ?>$</li>
					<li><?php echo $fechadesde ?></li>
					<li><?php echo $fechahasta ?></li>
				</ul>
    		</div>
	

			
		</div>
	</div>

	<div style="width: 80%;margin:auto;margin-top:20px;height: 5px; background-color: grey;"></div>

		<div style="width: 90%;margin:auto;height: 60px; background-color: #741919d6;margin-top: 50px;">
	
		<h2 style="padding-top: 15px;padding-left: 10px; color: white; font-size: 28px;">Formas de pago:</h2>

	</div>

	<div class="container">
		<div class="row justify-content-center">

			<div class="col-12">
				<p style="padding-left: 35%;">Transferencia bancaria - Efectivo a la llegada previa seña por transferencia</p>
				<p style="padding-left: 37%;">Datos transferencia bancaria: CBU 70212548548212548542131</p>
				<p style="padding-left: 36.5%;">Cuenta Santander Rio - Rodrigo Nicolas Finamore - DNI 36085882</p>
			</div>
	

			
		</div>
	</div>
	

	<div style="width: 80%;margin:auto; margin-top:20px; height: 5px; background-color: grey;"></div>

	<div style="width: 90%;margin:auto;height: 60px; background-color: #741919d6;margin-top: 50px;">
	
		<h2 style="padding-top: 15px;padding-left: 10px; color: white; font-size: 28px;">Mapa:</h2>

	</div>


	<div class="container">
		<div class="row justify-content-center">

			<iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1247.0798141955283!2d-65.0172913953779!3d-31.715161316398973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-31.715221699999997!2d-65.0173624!5e0!3m2!1ses-419!2sar!4v1534203766685" width="800" height="450" frameborder="0" style="border:solid 2px #741919d6; border-radius: 7px;margin-left: 10%;" allowfullscreen></iframe>


		</div>
	</div>


<div style="width: 80%;margin:auto;margin-top:20px;height: 5px; background-color: grey;"></div>

		<div style="width: 90%;margin:auto;height: 60px; background-color: #741919d6;margin-top: 50px;">
	
		<h2 style="padding-top: 15px;padding-left: 10px; color: white; font-size: 28px;">Condiciones de la cabaña:</h2>

	</div>

	<div class="container">
		<div class="row justify-content-center">

			<div class="col-12" style="height: 150px">
				<p style="padding-left: 35%;">Al ingresar, debe firmar el inventario. Para leer el mismo, <a href="inventario.php">Click aqui.</a></p>
				<p style="padding-left: 35%;">Recordar traer ropa blanca</p>
				<p style="padding-left: 35%;">Presentar este formulario al ingresar a la cabaña (Impreso o por celular)</p>
			</div>
	

			
		</div>
	</div>
	


	<div style="width: 80%;margin:auto;margin-top:20px;height: 5px; background-color: grey;"></div>

		<div style="width: 90%;margin:auto;height: 60px; background-color: #741919d6;margin-top: 50px;">
	
		<h2 style="padding-top: 15px;padding-left: 10px; color: white; font-size: 28px;">Condiciones de la Reserva:</h2>

	</div>

	<div class="container">
		<div class="row justify-content-center">

			<div class="col-12" style="height: 230px">
				<p style="padding-left: 35%;">En cancelaciones con anticipacion menor a 72 hs, se pierde la seña depositada dado que la misma constituye un compromiso de reserva.</p>
				<p style="padding-left: 35%;">En cancelaciones con anticipacion mayor a 72 hs, se reintegra un 50% de la seña depositada.</p>
				<p style="padding-left: 35%;">Ante cualquier consulta, comunicarse con Rodrigo o Alberto</p>
				<p style="padding-left: 35%;">Rodrigo - 11-33764897 / Alberto - 11-61258784</p>
			</div>
	

			
		</div>
	</div>


	<div style="width: 55%;margin:auto;margin-top:30px;height: 5px; background-color: grey;"></div>


	<form><input type='button' onclick='window.print();' width='100px' height="50px" value='Imprimir' style="width:100px; height:50px; margin-left: 50%; margin-top: 5%;" /><input type='button' onclick='location.href="index.php";' value='Inicio' style="width:80px; height:50px; margin-left: 50.5%;margin-top: 10px; " /></form> 




<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>