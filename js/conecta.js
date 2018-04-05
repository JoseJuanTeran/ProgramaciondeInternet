$(document).ready( function () {
	$("#button").on('click', function(event) {
		event.preventDefault();

		hacerOperaciones();
	});

	$("#btnPedido").on('click', function(event) {
		event.preventDefault();

		hacerPedido();
	});

	$("#regresar").on('click', function(event) {
		event.preventDefault();

		Operaciones();
	});

	function hacerOperaciones(){
		var usuario = $("#usuario").val();
		var password = $("#password").val();

		if(usuario=="" || password=="")
		{
			alert("Ingresa un Usuario o Password");
		}
		else
		{
				$.ajax({
					type: "POST",
					url: "valida.php",
					  success : function(){
					   window.location.href = "valida.php?usuario="+usuario+"&password="+password;
					    }
			    	        });
		}
	};

	function Operaciones(){



				$.ajax({
                type: "POST",
                url: "login.html",
                  success : function(){
                   window.location.href = "login.html";
        	    }
    	        });



	};

	function hacerPedido(){
	var cantidad = $("#cantidad").val();
	var descripcion = $("#descripcion").val();

	if(cantidad=="" || descripcion=="")
		{
			alert("Ingresa todos los datos");
		}
	else{
	$.ajax({
		type: "POST",
		url: "crearpedido.php",
		  success : function(){
		   window.location.href = "crearpedido.php?cantidad="+cantidad+"&descripcion="+descripcion;
		    }
    	        });

	}
	};

});
