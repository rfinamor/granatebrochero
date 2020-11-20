<?php 
include("panelAdmin.php");
?>

<h3>Ingresar reserva</h3>


<form>
	<div class="container">
		    <div class="row">
			    <div class="col-md-6">
			      <input type="text" class="form-control" placeholder="Nombre">
			      <input type="number" class="form-control" placeholder="Cabaña">
			      <input type="number" class="form-control" placeholder="Precio">
			      <input placeholder = "Fecha ingreso" class = "textbox-n form-control" type = "text" onfocus = "(this.type = 'date')"  id = "dateIngreso">
			      <input type="number" class="form-control" placeholder="Cantidad de adultos">
			    </div>
			    <div class="col-md-6">
			      <input type="text" class="form-control" placeholder="Apellido">
			      <input type="text" class="form-control" placeholder="Celular">
			      <input type="number" class="form-control" placeholder="Numero de reserva">
			      <input placeholder = "Fecha salida" class = "textbox-n form-control" type = "text" onfocus = "(this.type = 'date')"  id = "dateIngreso">
			      <input type="number" class="form-control" placeholder="Cantidad de menores">
			    </div>
			</div>
			<button type="button" id="botonReserva" class="boton1">Reservar</button>
	</div>

</form>
