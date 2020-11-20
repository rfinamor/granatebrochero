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
	.form{
		width: 30px!important;
	}
		
	table {
    	background-color: #e5e2e28f!important;
		padding-left:15px;
		width: 80%!important;
		margin-left: 10%;
		color:black!important;
		font-weight: bold;
		font-size: 15px;
		margin-top: 50px;
	}
	tbody{
		border-color: #862222!important;
	}
	thead{
		background-color: #862222!important;
		color:black;
		font-size: 20px;
	}

	tfoot{
		background-color: #862222!important;
		font-size: 20px;
	}

	td{
		border-color: #862222!important;
	}
		body{
			background-image: url('../bgPanel.jpg');
			height: 1;

    		padding-top: 70px;
    		min-height: 100vh!important;

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

.navbar-fixed-left{
	height: 100%!important;
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
			margin-left: 5px;
			margin-top: 5%;
			margin-bottom: 1px;
			font-size: 40px;
			color: #862222;
}

input{
	margin-top: 5%!important;
}

input[type="date"]::before{
   color: #ffffff;
   content: attr(placeholder) ": ";
}
input[type="date"]:focus::before {
   content: "" !important;
}


.boton1{
	display: block;
	margin-left: 40%;
	margin-top: 60px;
	height: 60px;
	width: 200px;
	background-color: #862222;
	border-radius: 5px;
	box-shadow: 5px 7px 9px 4px black;
	font-size: 20px;
	color:white;
}

.boton1:hover{
	background-color: #a5a179
}
input::placeholder {
  color: #862222!important;
  opacity: 0.8;
}

	</style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='../img/logo.png' rel='shortcut icon' type='image/png'>

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/paper/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/navbar-fixed-right.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/navbar-fixed-left.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/docs.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/docs.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="../package/dist/sweetalert2.all.min.js"></script>
</head>
<body>
	<a href="../cerrarSesion.php" class="cerrarsesion"><img src="../cerrarsesion.png" width="200px" height="40px"></a>
	<img src="../logo.png" class="logo">

	<nav class="navbar navbar-inverse navbar-fixed-left" style="background-color: #862222;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="font-size: 24px; margin-left: -15px;">Cabañas Granate</a>
        <p class="navbar-text" style="font-size: 20px; margin-left: 1px;">Administrador</p>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
        	<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 17px;">Reservas <span class="caret"></span></a>
            <ul class="dropdown-menu">
            	<li><a href="ingresarReserva.php">Ingresar Reserva</a></li>
              <li><a href="reservasConfirmadas.php">Reservas confirmadas</a></li>
              <li><a href="reservasPendientes.php">Reservas pendientes</a></li>
              <li><a href="reservasPagadas.php">Reservas pagadas</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 17px;">Pagos<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Ingresar pago</a></li>
              <li><a href="#">Ver pagos</a></li>
             </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-size: 17px;">Gastos<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Ingresar gastos</a></li>
              <li><a href="#">Ver gastos</a></li>
             </ul>
          </li>

          
        </ul>
        </div>
    </div>
  </nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>

<?php 
}else echo "No autorizado";
 ?>