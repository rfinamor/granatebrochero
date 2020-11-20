<?php 
include("conexion.php");
include("sesion-verificar.php");
include("validarFecha.php");
haySesion();
$query = "SELECT idReserva FROM reserva1 order by id desc limit 1";
$resultado=mysqli_fetch_assoc(mysqli_query($conexion,$query));
$idreserva = $resultado['idReserva']
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="package/dist/sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
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
	.opcion{
			text-align: center;
			margin-top: 5%;
			margin-bottom: 1px;
			font-size: 40px;
			color: #862222;
}

h3{
			text-align: center;
			margin-top: 5%;
			margin-bottom: 1px;
			font-size: 40px;
			color: #862222;
}



.boton1{
	display: block;
	margin-left: 70px;
	margin-top: 50px;
	height: 60px;
	width: 120px;
	background-color: #862222;
	border-radius: 5px;
	box-shadow: 5px 7px 9px 4px black;
	font-size: 20px;
	color:white;
}

.boton1:hover{
	background-color: #a5a179
}
input{
	display: block;
	margin-top: 21px!important;
	background-color: #f5f5f57d;
	width:280px;
    padding:15px 15px;
    font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	background: #f5f5f57d;
	border:none;
	border-radius: 5px;
	color: #333;
	font-size: 14px;

}


select{
	display: block!important;
	margin-top: 21px!important;
	width:280px!important;
    padding:15px 15px!important;
    font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif!important;
	background: #f5f5f57d!important;
	border:none!important;
	border-radius: 5px!important;
	color: #333!important;
	font-size: 14px!important;
}
.formulario{
	width: 100%;
}

.row{
	margin-left: 40%!important;
	margin-top: 50px;
}

.volver{
	margin-left: 8%;
	color: blue;
	font-size: 25px;
}
.cerrarsesion{
  position: absolute;
  top:20px;
  right: 10px;


}


		</style>
	<title></title>
</head>
<body>
	<img src="logo.png" class="logo">
	<h2 class="opcion">Ingrese datos de la reserva N°<?php echo $resultado['idReserva']; ?> para nuestra cabaña 1:</h2>

	<h3>Fecha seleccionada: <?php 
	$fechas = $_POST['fechas'];
	$precio = $_POST['precio'];

	$fechadiadesde= substr($fechas,3,2);
	$fechamesdesde= substr($fechas,0,2);
	$fechaanodesde= substr($fechas,6,4);

	$fechadiahasta= substr($fechas,16,2);
	$fechameshasta= substr($fechas,13,2);
	$fechaanohasta= substr($fechas,19,4);


	$fechaDesde = $fechaanodesde .'-' .$fechamesdesde .'-' .$fechadiadesde;
	$fechaHasta = $fechaanohasta .'-' .$fechameshasta .'-' .$fechadiahasta;

	echo "Desde " ."<strong>" .$fechaDesde ."</strong>" ." Hasta " ."<strong>" .$fechaHasta ."</strong>";

	?> </h3>

<div class="container">
	<div class="row">
		<form class="formulario" id="formulario" action="reservaConfirmada.php" method="POST">
			<input type="text" id="nombre" name="Nombre" placeholder="Nombre" required>
			<input type="text" id="apellido"  name="Apellido" placeholder="Apellido" required>
			<input type="number" id="edad"  name="Edad" maxlength="2" placeholder="Edad" required>
			<input type="number" id="celular"  name="Celular" maxlength="11" placeholder="Celular" required>
			<input type="hidden" id="fechadesde" name="fechadesde" value='<?php echo"$fechaDesde";?>' >
			<input type="hidden" id="fechahasta" name="fechahasta" value='<?php echo"$fechaHasta";?>' >
			<input type="hidden" id="idreserva" name="idreserva" value='<?php echo "$idreserva";?>' >
			<input type="hidden" id="precio" name="precio" value='<?php echo "$precio";?>' >

			<input type="hidden" id="cabana" name="cabana" value='1' >


			<select type="number" id="cantadultos"  name="CantidadAdultos">
									<option>Cantidad de Adultos</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
			<select type="number" id="cantmenores" name="CantidadMenores" placeholder="Cantidad de Menores">
									<option>Cantidad de Menores</option>
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>

			<button type="button" id="botonReserva" class="boton1">Reservar</button>
			<br><a class="volver" href="index.php">Volver a inicio!</a>				



		</form>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="js/AjaxReserva.js"></script>

</body>
</html>