<?php

// Llamando a los campos
$nombre = $_POST['nombre1'];
$correo = $_POST['correo1'];
$numero1 = $_POST['numero1'];
$mensaje = $_POST['mensaje1'];

// Datos para el correo
$destinatario = "alexis2006jara@gmail.com";
$asunto = "Contacto desde mi web";

$carta = "De: $nombre1 \n";
$carta .= "Correo: $correo1 \n";
$carta .= "Telefono: $numero1 \n";
$carta .= "Mensaje: $mensaje1";

// Enviando mensaje
mail($destinatario, $asunto, $carta);

echo "<script>alert('Correo enviado')</script>";
echo "<script> setTimeout(\"location.href="contacto.html"\")</script>";

?>