<?php
$destino="javiercanchanya82@gmail.com";
$nombre= $_POST['nombre'];
$email=$_POST['email'];
$papa=$_POST['papa'];
$olluco=$_POST['olluco'];
$cantidad=$_POST['cantidad'];
$direccion=$_POST['direccion'];
$distrito=$_POST['distrito'];
$mensaje=$_POST['mensaje'];
$contenido="nombre: " . $nombre . "\nemail: ". $email . "\npapa: " . $papa "\nolluco: " . $olluco ."\ncantidad" . $cantidad . "\ndireccion: " . $direccion . "\ndistrito: " . $distrito . "\nmensaje: " . $mensaje;
mail($destino,"contacto", $contenido)
header("location:../HTML/gracias.html")
?>