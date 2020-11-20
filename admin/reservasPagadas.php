<?php 
include("panelAdmin.php");
?>

<h3>Reservas pagadas</h3>

<?php
            $query = mysqli_query($conexion,"SELECT datosreserva.*,estados.estado from datosreserva,estados WHERE datosreserva.estado = estados.idEstado AND estados.estado = 'pagada'");
            
            
?>

<table class="table table-bordered table-light">
		
		<thead class="thead-dark">
			<tr>
				
				<th scope="col">N° RESERVA</th>
				<th scope="col">CABAÑA</th>
				<th scope="col">FECHA INGRESO</th>
				<th scope="col">FECHA SALIDA</th>
				<th scope="col">NOMBRE</th>
				<th scope="col">APELLIDO</th>
				<th scope="col">EDAD</th>
				<th scope="col">CELULAR</th>
				<th scope="col">N° ADULTOS</th>
				<th scope="col">N° MENORES</th>
				<th scope="col">PRECIO</th>
				<th scope="col">ID USUARIO</th>
				<th scope="col">ESTADO</th>
				<th scope="col">SEÑA</th>
				<th scope="col">ACCION</th>
				<th scope="col">ACTUALIZAR PAGO</th>
			</tr>
		</thead>
		<tbody>
		<?php
		
		$total 	= 0;
		$id = 0;
		while ($row = mysqli_fetch_array($query))
		{
			$id++;
			echo '<tr class="table-danger">
					
					<td>'.$row['idReserva'].'</td>
					<td>'.$row['cabana'].'</td>
					<td>'.$row['fechaIn'].'</td>
					<td>'.$row['fechaOut'].'</td>
					<td>'.$row['nombre'].'</td>
					<td>'.$row['apellido'].'</td>
					<td>'.$row['edad'].'</td>
					<td>'.$row['celular'].'</td>
					<td>'.$row['cantadultos'].'</td>
					<td>'.$row['cantmenores'].'</td>
					<td>'.$row['precio'].'$</td>
					<td>'.$row['idUsuario'].'</td>
					<td>'.$row['estado'].'</td>
					<td>'.$row['pagoreserva'].'$</td>
					<td> <a id="eliminar" href="eliminar.php?id='.$row['idReserva'].'&confirmadas=1&cabana='.$row['cabana'].'"><img src="eliminar.png" width="30px" height="30px"></td>
					<td><form>
					<input type="hidden" value="'.$row['idReserva'].'" id="idReserva">

					<button type="button" class="pagar"><img src="pagar.png" width="30px" height="30px"></button>
					</form>
					</td>
				</tr>';
			$total += $row['precio'];
			
		}?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="10">TOTAL</th>
				<th><?=number_format($total)?>$</th>
			</tr>
		</tfoot>
	</table>

			<script type="text/javascript">
$(document).ready(function(){
    $(".pagar").click(function(){
        swal({
		  title: 'Ingrese monto pagado:',
		  input: 'text',
		  inputAttributes: {
		    autocapitalize: 'off',
		    id:'pago'
		  },
		  showCancelButton: true,
		  confirmButtonText: 'Ingresar',
    	});
    	$(".swal2-confirm").click(function(){
		var idReserva = $("#idReserva").val();
		var pago = $("#pago").val();
		$.ajax({
			type:'post', //method
			dataType:'html',
			url: "pagar.php", //action
			data:{'idReserva': idReserva,'pago':pago},
			success: function(){
				alert("Se ha ingresado el pago por la reserva N°"+idReserva);
				location.href ="reservasPagadas.php";
			}

		});
	});
	});
	
});
	</script>