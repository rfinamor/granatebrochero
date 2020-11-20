<?php 
include("panelAdmin.php");
?>

<h3>Reservas pendientes</h3>

<?php
            $query = mysqli_query($conexion,"SELECT datosreserva.*,estados.estado from datosreserva,estados WHERE datosreserva.estado = estados.idEstado AND estados.estado = 'pendiente'");
            
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
				<th scope="col">ACCION</th>
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
					<td>'.$row['precio'].'</td>
					<td>'.$row['idUsuario'].'</td>
					<td>'.$row['estado'].'</td>
					<td><a id="eliminar" href="eliminar.php?id='.$row['idReserva'].'&confirmadas=0&cabana='.$row['cabana'].'"><img src="eliminar.png" width="30px" height="30px"></a><a id="confirmar" href="confirmar.php?id='.$row['idReserva'].'"><img src="confirmar.png" width="30px" height="30px"></a></td></td> 


					
				</tr>';
			$total += $row['precio'];
			
		}?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="10">TOTAL</th>
				<th><?=number_format($total)?></th>
			</tr>
		</tfoot>
	</table>


	<script type="text/javascript">
		$(document).ready(function(){
			$('#confirmar').click(function() {
				alert("Se confirmó la reserva OK");
	    		
			});	

			$('#eliminar').click(function() {
				alert("Se eliminó la reserva OK");
	    		
			});
		});
	</script>