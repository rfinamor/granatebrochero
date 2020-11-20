<style>
body{
	background-image:url("fondo.jpg");
	color:#f5f5f5;
	text-align:center;
	font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
}

a{
	color:#fff;
	text-decoration:none;
}
	
#loginform{
	margin-top:120px;
  margin-left:auto;
  margin-right:auto;
	width:350px;
}
	
.input{
	width:362px;
    padding:15px 15px;
    font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	background: #f5f5f5a1;
	border:none;
	border-radius: 5px;
	color: #333;
	font-size: 14px;
	
}

.loginbutton{
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

.loginbutton:active {
	position:relative;
	top:1px;
}

.loginbutton:hover{
	background-color:#9B8C77;
}

.navegacion{
	padding-left: 15%;
}

#registrate{
	padding-left: 30px;
	padding-top: 20px;
}

#registrate:hover{
	text-decoration: none;

}
</style>

	<form id="loginform" method="" action="javascript:void(0);">
	<input type="text" class="input" id="email" placeholder="E-mail" name="email" /> 
	<input type="password" class="input" id="password" placeholder="Password" name="password" />
	<button type="button" class="loginbutton" id="ingresar" value="Ingresar">Ingresar</button> 
	<?php
	$error = isset($_GET["error"]);
	if($error) { ?>
		<p>Usuario o contraseña incorrecto</p>
<?php
	}

	 ?>
	</form>
	<a id="registrate" href="registrate.php">Registrate!</a> 



