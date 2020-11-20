$(document).ready(function(){

	$("#ingresar").click(function(){

		var email = $("#email").val();
		var password = $("#password").val();


		$.ajax({
			type:'post', //method
			dataType:'json',
			url: "procesoUsuario.php", //action
			data:{'email': email,'password': password},
			success: function(respuesta){
				if(respuesta.success){
					window.location = "panelUsuario.php";
				} else {
					if(respuesta.code == 1){
						alert("Usuario o contraseña incorrecta");
					}
				}
								
			}

		});

		 
	});
});