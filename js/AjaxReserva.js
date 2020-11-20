$( window ).load(function() {
	$("#botonReserva").click(function(){
		var nombre = $("#nombre").val();
		var apellido = $("#apellido").val();
		var edad = $("#edad").val();
		var celular = $("#celular").val();
		var cantadultos = $("#cantadultos").val();
		var cantmenores = $("#cantmenores").val();
		var fechadesde = $("#fechadesde").val();
		var fechahasta = $("#fechahasta").val();
		var idreserva = $("#idreserva").val();
		var cabana = $("#cabana").val();
		var precio = $("#precio").val();



		if($("#cantadultos option:selected").text()=='Cantidad de adultos' && $("#cantmenores option:selected").text()=='Cantidad de menores'){
			alert("Falta seleccionar correctamente la cantidad de adultos y la cantidad de menores");
			location.href ="reserva1.php";
		}

		if ($("#cantadultos option:selected").text()=='Cantidad de adultos'){
			alert("Falta seleccionar correctamente la cantidad de adultos");
			location.href ="reserva1.php";	
		}
		if ($("#cantmenores option:selected").text()=='Cantidad de menores'){
			alert("Falta seleccionar correctamente la cantidad de menores");
			location.href ="reserva1.php";	
		}

		$.ajax({
					type:'post', //method
					dataType:'html',
					url: "procesoReserva.php", //action
					data:{'precio':precio,'cabana':cabana,'nombre': nombre,'apellido': apellido,'edad': edad,'celular': celular,'cantadultos': cantadultos, 'cantmenores':cantmenores,'idreserva':idreserva, 'fechahasta':fechahasta, 'fechadesde':fechadesde},
					success: function(resultado){
						console.log(resultado);
						if(resultado == 1){
							$("#formulario").submit();
							location.href ="reservaConfirmada.php";
						}else{
							alert("Hubo un error en tus datos, volve a ingresar los mismos");
							$("#formulario").submit();
							location.href ="panelReserva1.php";								
						}
					}
		
		});

});

});