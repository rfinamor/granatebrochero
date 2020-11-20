<?php 
include("conexion.php");
include("sesion-verificar.php");
haySesion();
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="package/dist/sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<style>body{
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
	margin-top: 10%;
	margin-bottom: 1px;
	font-size: 40px;
	color: #862222;
}

.calendario{
	text-align: center;
	margin-top: 10%;
	margin-bottom: 1px;
	margin-left: 40%;
	width: 20%;
	height: 10%;

}

.boton1{
	display: block;
	margin-left: 47%;
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
.cerrarsesion{
  position: absolute;
  top:20px;
  right: 10px;


}

#precio{
		margin-bottom: 1%;
	margin-top: 5%;
}

h3{
	margin-left: 32%;
	font-size: 30px;

}

.opcion1 {
	color: #862222;
	font-weight: bold;
	font-style: bold;
}

.opcion2{
	color: #862222;
	font-weight: bold;
	font-style: bold;
}

#formulario{
	margin-top: -5.8%;
}

		</style>
	<title></title>
</head>
<body>
	 <a href="cerrarSesion.php" class="cerrarsesion"><img src="cerrarsesion.png" width="200px" height="40px"></a>
		<img src="logo.png" class="logo">
	<h2 class="opcion">Verificar disponibilidad</h2>

	<div id="precio" style="display: none;">
		<h3>El precio por dia entre las fechas seleccionadas es de: <span id="precioH3" class="opcion1"></span></h3>
		<h3>El precio total entre las fechas seleccionadas es de: <span id="preciototalH3" class="opcion2"></span></h3>

	</div>



<form action="reserva1.php" method="POST" id="formulario">
<input type="text" name="fechas" id="daterange" class="calendario" value="07/01/2018 - 07/31/2018" />
<input type="hidden" name="precio" id="precio1">
<button type="button" id="boton" class="boton1">Verificar</button>
</form>



<script type="text/javascript">
$(function() {
   $('input[name="fechas"]').daterangepicker();
});



$( window ).load(function() {

	$('.applyBtn').click(function(){
		var fechas = $('#daterange').val();
	 	var cabana = 1;

		$.ajax({
			type:'post', //method
			dataType:'html',
			url: "validarPrecio.php", //action
			data:{'fechas':fechas,'cabana':cabana},
			success: function(resultado){
				$('#precioH3').html(resultado + '$');
				
				$("#precio").css("display", "block");
				var fechas = $('#daterange').val();	

				var fechadiadesde= fechas.substr(3,2);
				var fechamesdesde= fechas.substr(0,2);
				var fechaanodesde= fechas.substr(6,4);

				var fechadiahasta= fechas.substr(16,2);
				var fechameshasta= fechas.substr(13,2);
				var fechaanohasta= fechas.substr(19,4);


				var fechaDesde = fechadiadesde +'/' + fechamesdesde +'/' + fechaanodesde;
				var fechaHasta = fechadiahasta +'/' + fechameshasta +'/' + fechaanohasta;

				console.log(fechaDesde);

				var a = moment(fechaDesde,'D/M/YYYY');
				var b = moment(fechaHasta,'D/M/YYYY');
				var diffDays = b.diff(a, 'days');
				var precioTotal = diffDays * resultado;
				$('#preciototalH3').html(precioTotal + '$');
				$( "#precio1" ).attr( "value", precioTotal );
			}







		 

		});
	});

	$('#boton').click(function(){
 	var fechas = $('#daterange').val();
 	var cabana = 1;
	var fechadiadesde= fechas.substr(3,2);
	var fechamesdesde= fechas.substr(0,2);
	var fechaanodesde= fechas.substr(6,4);

	var fechadiahasta= fechas.substr(fechas,16,2);
	var fechameshasta= fechas.substr(fechas,13,2);
	var fechaanohasta= fechas.substr(fechas,19,4);


	var fechaDesde = fechaanodesde +'-' + fechamesdesde + '-' + fechadiadesde;
	var fechaHasta = fechaanohasta +'-' + fechameshasta + '-' + fechadiahasta;

 	console.log(fechas);



		$.ajax({
			type:'post', //method
			dataType:'html',
			url: "validarFecha.php", //action
			data:{'fechas': fechas,'cabana':cabana},
			success: function(resultado){
				console.log(resultado);
				if(resultado == 0){
					swal({
					  type: 'error',
					  title: 'Ops!',
					  text: 'Ya no queda disponibilidad en la fecha seleccionada',
					  footer: '<p>Proba con otra combinacion de fechas</p>'
					})
					console.log('pase por aca');
				}
				else{
					swal({
					  position: 'center',
					  type: 'success',
					  title: 'La fecha que seleccionaste esta dispnonible',
					  showConfirmButton: true,
					  confirmButtonText: 'Continuar'

					  
					}).then(function() {
						$("#formulario").submit();
						
					});

				}

			}
		});

	});
});

</script>





<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="http://momentjs.com/downloads/moment.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

</body>
</html>