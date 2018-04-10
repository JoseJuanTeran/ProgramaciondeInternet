<?php
  $usuario1 = $_REQUEST["usuario"];
  $contraseña1 = $_REQUEST["password"];
 
 //print ("<P>$usuario1</P>");
 //print ("<P>$contraseña1</P>");

  include 'conexion.php';

  $query="INSERT INTO login (usuario, password) VALUES ('$usuario1', '$contraseña1')";
  $resultado=$mysqli->query($query);

  echo '<script type="text/javascript"> window.location="login.html"</script>';

?>
