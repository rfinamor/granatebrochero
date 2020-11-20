<?php
 
include("sesion-verificar.php");



?>
			<nav class="navbar  navbar-expand-md navbar-light bg-light navbar-toggleable-md navegacion">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse text-center" id="navbarNavAltMarkup">
			    <div class="navbar-nav navegacion">
			      <a class="nav-item nav-link" href="index.php">Inicio</a>
			      <a class="nav-item nav-link" href="#Quienessomos">Nosotros</a>
			      <a class="nav-item nav-link" href="#">Cabañas</a>
			      <a class="navbar-brand" href="#"><img src="img/Logo.png"  class="d-inline-block align-center"></a>
			      <a class="nav-item nav-link" href="#tituloServicios">Servicios</a>
			      <a class="nav-item nav-link" href="https://www.google.com.ar/maps/dir//-31.7152605,-65.0173075/@-31.7146426,-65.0181015,17.25z/data=!4m2!4m1!3e3">Ubicacion</a>
			      <a class="nav-item nav-link" href="#contacto">Contacto</a>
			      <?php 

			      if(!isset($_SESSION['ingreso']) || empty($_SESSION['ingreso'])){
			      	echo '<a href="iniciar-sesion.php" class="myButton22"><img src="botonreservar.png" style="width:210px;height: 75px; margin-top: 37px;margin-left: 50px; "></a>';
			      }else echo '<a href="panelUsuario.php" class="myButton22"><img src="botonreservar.png" style="width:210px;height: 75px; margin-top: 37px;margin-left: 50px; "></a>';
			       ?>
			    </div>
			  </div>
			</nav>