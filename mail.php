<?php

if (isset($_POST['nombre'])) {
$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre: ".$nombre."\nCorreo: " .$email .  "\nMensaje: " .$mensaje;
$micorreo= "davisramirezdiaz@gmail.com";

mail($micorreo,"Cliente-Formulario",$contenido);

header("Location:Mensaje.html");

}

else {
    header("Location:Error.html");

}


?>