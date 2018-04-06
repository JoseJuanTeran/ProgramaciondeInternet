$(document).ready(function(){
  $("#Agregar").on('click', function(event){
    event.preventDefault();
    alert('ingresando a js');
    agregarUsuario();
  });

  function agregarUsuario(){
    var usuario = $("#usuario").val();
    var contraseña = $("#contraseña").val();

    $.ajax({
      type: "POST",
      url: "agregar.php",
      success : function(){
        window.location.href = "agregar.php?usuario="+usuario+"&contraseña="+contraseña;
      }
    })
  }
})
