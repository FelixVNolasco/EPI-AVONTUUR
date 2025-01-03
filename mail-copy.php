<?php
$firstn = $_POST['firstn'];
$lastn = $_POST['lastn'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$message = $_POST['message'];
$formcontent="Nombre: $firstn \n Apellidos: $lastn \n Email: $email \n Servicios: $services \n Telefono: $phone \n Mensaje: $message";
$recipient = "felixvnolasco@gmail.com";
$subject = "Contacto de cliente | EPI AVONTUUR";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
require_once "thank-you.html";
?>

