var x = $(document).ready(function(){

	var y = $("#Registrarme").click(function(){

		var nombre = $("#Nombre").val();
		var apellido = $("#Apellido").val();
		var email = $("#Email").val();
		var password = $("#Password").val();
		var telefono = $("#Telefono").val();

		$.ajax({
			type:'post', //method
			dataType:'html',
			url: "procesoRegistro.php", //action
			data:{'nombre': nombre,'apellido': apellido,'email': email,'password': password,'telefono': telefono,},
			success: function(){

				alert("Registro satisfactorio!");
				location.href ="iniciar-sesion.php";
			}

		});

		 
	});
});