<?php 
include("conexion.php");
//include("sesion-verificar.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		}.hovereffect {
  width: 80%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: pointer;


}

.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;
  padding: 70px;
  border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);

}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  font-size: 2em;
}

.hovereffect img {

  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 24px;
  background-color: transparent;
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.img-responsive{
	filter: blur(1px);
	border: 5px solid #ffffff3d;
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}



.container{
	margin-top: 7%;
}

.opcion{
	text-align: center;
	margin-top: 30px;
	margin-bottom: 1px;
	font-size: 40px;
	color: #862222;
}
.row{
	margin-top: 25px;
}
.cerrarsesion{
  position: absolute;
  top:20px;
  right: 10px;


}
	</style>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href='img/logo.png' rel='shortcut icon' type='image/png'>
</head>
<body>
	 <a href="cerrarSesion.php" class="cerrarsesion"><img src="cerrarsesion.png" width="200px" height="40px"></a>
	<img src="logo.png" class="logo">


<h2 class="opcion">Elegí tu cabaña:</h2>

<div class="container">
	<div class="row ">
		<div class="col-xl-6">
		    <div class="hovereffect">
		        <img class="img-responsive" src="hover1.jpg" alt="">
		            <div class="overlay">
		                <h2>Cabaña 1</h2>
						<p>
							<a href="panelReserva1.php" style="padding:150px;"></a>
						</p>
		            </div>
		    </div>
	    </div>
    
    	<div class="col-xl-6">
		    <div class="hovereffect">
		        <img class="img-responsive" src="hover2.jpg" alt="">

		            <div class="overlay">
		                <h2>Cabaña 2</h2>
						<p>
							<a href="panelReserva.php" style="padding:150px;"></a>
						</p>
		            </div>
		    </div>
	    </div>
	  </div>
	  	<div class="row ">
		<div class="col-xl-6">
		    <div class="hovereffect">
		        <img class="img-responsive" src="hover3.jpg" alt="">
		            <div class="overlay">
		                <h2>Cabaña 3</h2>
						<p>
							<a href="panelReserva.php" style="padding:150px;"></a>
						</p>
		            </div>
		    </div>
	    </div>
    
    	<div class="col-xl-6">
		    <div class="hovereffect">
		        <img class="img-responsive" src="hover4.jpg" alt="">

		            <div class="overlay">
		                <h2>Cabaña 4</h2>
						<p>
							<a href="panelReserva.php" style="padding:150px;"></a>
						</p>
		            </div>
		    </div>
	    </div>
	  </div>
    
</div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>