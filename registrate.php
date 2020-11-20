<!DOCTYPE html>
<html>
<head>
	<title>Registrate - Cabañas Granate</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href='img/logo.png' rel='shortcut icon' type='image/png'>

	<link rel="stylesheet" type="text/css" href="estilos.css">
	<style>
	body{
		background-image:url('bgPanel.jpg');
	}
	.myButton {
	
	background-color:#730808;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #f4f7f4;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	padding:4px 32px;
	text-decoration:none;
	text-shadow:0px 1px 0px #000000;
	top: -90px;
	margin-top: 10%;
    position: relative;
    left:25%;
}
.myButton:hover {
background-color:#dfdfdf;
text-decoration:none;
}
.myButton:active {
	position:relative;
	top:-85px;
}
.myButton2 {
	background-color:#730808;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #f4f7f4;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:20px;
	padding:15px 22px;
	text-decoration:none;
	text-shadow:0px 1px 0px #000000;
	top: -18px;
	margin-top: 10%;
    position: relative;
    left:13.5%;
    vertical-align: center;
}
.myButton2:hover {
background-color:#000000;
text-decoration:none;
}
.myButton2:active {
	position:relative;
	top:-15px;}
.quienessomos{

	width: 100%;
	margin-left: 1%;
	
}
body{
	background-color:#590000;
	color:#f5f5f5;
	text-align:center;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
}

a{
	color:#fff;
	text-decoration:none;
	margin-left: 2%;
}

form{
	margin-top: 3%!important;
}
	
#registroBtn{
	margin-top:150px;
  margin-left:auto;
  margin-right:auto;
	width:280px;
}
	
.input{
	width:280px;
    padding:15px 15px;
    font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	background: #f5f5f57d;
	border:none;
	border-radius: 5px;
	color: #333;
	font-size: 14px;

}

.registroBtn{
	background-color:#540202c7;
	border-radius:5px/5px;
	-webkit-border-radius:5px/5px;
	-moz-border-radius:5px/5px;
	color:white;
	display:inline-block;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	font-size:18px;
	font-weight:bold;
	width:282px;
	text-align:center;
	line-height:50px;
	text-decoration:none;
	height:50px;
	margin-top:60px;
	margin-bottom:20px;
	border:none;
	outline:0;
	cursor: pointer;
	margin-left: 7%;
}

.registroBtn:active {
	position:relative;
	top:1px;
}

.registroBtn:hover{
	background-color:#e5bf05;
}

li{
	list-style: none;
	width: 250px;
	margin: auto;
}

input[type=text]{
	width: 280px;
	margin: auto;
}

#Registrarme{
	margin-left:2%;
}





</style>
</head>
<body>
	<?php include("menu.php"); ?>
	<h2 class="quienessomos">Registrate</h2>
	<ul>
		<form id="" method="" action="">
			<li>Nombre:<input type="text" id="Nombre" class="input" placeholder="Nombre" /></li>
			<li>Apellido:<input type="text" id="Apellido" class="input" placeholder="Apellido" /></li>
			<li>E-mail:<input type="text" id="Email" class="input" placeholder="Email" /></li>
			<li>Contraseña:<input type="password" id="Password" class="input" placeholder="Password" /></li>
			<li>Telefono:<input type="text" id="Telefono" class="input" placeholder="Telefono" /></li>
			<button type="button" class="registroBtn" id="Registrarme" value="Registrarme">Registrarme</button>
			<br><a id="volver" href="iniciar-sesion.php">Iniciar Sesion</a>
		</form>
	</ul>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/AjaxRegistro.js"></script>
</body>
</html>