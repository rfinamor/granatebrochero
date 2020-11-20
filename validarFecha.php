<?php 
	include("conexion.php");
	$fechas = $_POST['fechas'];
	

	$fechadiadesde= substr($fechas,3,2);
	$fechamesdesde= substr($fechas,0,2);
	$fechaanodesde= substr($fechas,6,4);

	$fechadiahasta= substr($fechas,16,2);
	$fechameshasta= substr($fechas,13,2);
	$fechaanohasta= substr($fechas,19,4);


	$fechaDesde = $fechaanodesde .'-' .$fechamesdesde .'-' .$fechadiadesde;
	$fechaHasta = $fechaanohasta .'-' .$fechameshasta .'-' .$fechadiahasta;

	$sql = "select * from reserva1 where fechaDesde between '$fechaDesde' and '$fechaHasta' and fechaHasta between '$fechaDesde' and '$fechaHasta'";
	$result = mysqli_query($conexion,$sql);
	$a=mysqli_fetch_assoc($result);


	$resultado = 0;



	if($a != null){
		echo $resultado;

	}else{
		$resultado = 1;
		$table = '';
		$cabana = $_POST['cabana'];
		switch ($cabana) {
    		case 1:
        		$table = 'reserva1';
        		break;
    		case 2:
        		$table = 'reserva2';
        		break;
    		case 3:
        		$table = 'reserva3';
        		break;
        	 case 4:
        		$table = 'reserva4';
        		break;
		}
		$idReserva= rand(0,500);
		$insertFecha = "INSERT INTO $table (idReserva,fechaDesde,fechaHasta) VALUES ('$idReserva','$fechaDesde','$fechaHasta')";
		$resultado = mysqli_query($conexion,$insertFecha);
		echo $resultado;

	} 
	





?>

