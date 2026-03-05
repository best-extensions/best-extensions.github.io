<?php
$to = "totaonovin@gmail.com"; // <-- inserisci qui la tua email
$subject = "Test mail dal server";
$message = "Questa è una email di test inviata dal server PHP.";
$headers = "From: info@onlinegratis.net\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "✅ Email inviata con successo!";
} else {
    echo "❌ Errore nell'invio dell'email.";
}
?>