<!DOCTYPE html>
<html>
<head>
	<title>Cabañas Granate - Reservar</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href='img/logo.png' rel='shortcut icon' type='image/png'>

	<link rel="stylesheet" type="text/css" href="estilos.css">
	<style>

.myButton2 {
-moz-box-shadow:inset -1px -1px 0px -50px #ffffff;
	-webkit-box-shadow:inset -1px -1px 0px -50px #ffffff;
	box-shadow:inset -1px -1px 0px -50px #ffffff;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background-color:#ededed;
	-webkit-border-top-left-radius:6px;
	-moz-border-radius-topleft:6px;
	border-top-left-radius:6px;
	-webkit-border-top-right-radius:6px;
	-moz-border-radius-topright:6px;
	border-top-right-radius:6px;
	-webkit-border-bottom-right-radius:6px;
	-moz-border-radius-bottomright:6px;
	border-bottom-right-radius:6px;
	-webkit-border-bottom-left-radius:6px;
	-moz-border-radius-bottomleft:6px;
	border-bottom-left-radius:6px;
text-indent:0;
	border:1px solid #dcdcdc;
	display:inline-flex;
	color:#540202;
	font-family:arial;
	font-size:16px;
	font-weight:bold;
	font-style:normal;
	padding:16px 40px;
	text-decoration: none;
	top: -65px;
	margin-top: 9%;
    position: relative;
    left:5.5%;
    vertical-align: center;
}
.myButton2:hover {
background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
	background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
	background-color:#dfdfdf;
	text-decoration: none;
}
.quienessomos{

	width: 100%;
	
}
</style>
</head>
<body>
<?php 
	include("menu.php");
 ?>

 <h2 class="quienessomos" style="padding-top: 5%;">Iniciar sesion</h2>

 <?php 
 include("formulario-iniciarsesion.php");
  ?>

  
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/AjaxIniciarSesion.js"></script>
</body>
</html>