$(document).ready( function () {
	$("#button").on('click', function(event) {
		event.preventDefault();
		hacerOperaciones();
	});

	function hacerOperaciones(){
		var usuario = $("#usuario").val();
		var password = $("#password").val();

		$.ajax({
        type: "POST",
        url: "informacion.php",
        success : function(){
              window.location.href = "informacion.php?usuario=" + usuario + "&password=" + password;
        }
    });
	};
});
