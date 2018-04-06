<?php
  $usuario1 = $_REQUEST['usuario'];
  $contraseña1 = $_REQUEST['contraseña'];
  //echo($usuario);
  //echo($contraseña);
  include 'conexion.php';

  $query="INSERT INTO login (usuario, password) VALUES ('$usuario1', '$contraseña1')";
  $resultado=$mysqli->query($query);

  echo '<script type="text/javascript"> window.location="login.html"</script>';

?>
