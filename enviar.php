<?php

// Llamando a los campos
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$country = $_POST['country'];
$subject = $_POST['subject'];

// Datos para el correo
$destinatario = "guillermoandrada@gmail.com";
$asunto = "Contacto desde mi Web";

$carta = "De: $fname\n";
$carta = "De: $lname\n";
$carta = "Correo: $email\n";
$carta = "Mensaje: $subject\n";


// Enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>