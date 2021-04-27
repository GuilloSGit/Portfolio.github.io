<?php

// Llamando a los campos
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$country = $_POST['country'];
$subject = $_POST['subject'];

// Datos para el correo
$destinatario = "guillermoandrada@gmail.com";
$asunto = "Contacto desde g-andrada.ga";

$carta = "De: $lname, $fname\n Correo: $email\n Desde: $country\n Mensaje $subject\n";


// Enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:index.html');

?>