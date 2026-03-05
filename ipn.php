<?php
// IPN webhook - Photo Cartoon License Sender

// Estrai i parametri dalla richiesta
$customer_email = $_REQUEST['CUSTOMER_EMAIL'] ?? null;
$licensed_email = $_REQUEST['LICENSED_TO_EMAIL'] ?? null;
$order_status = $_REQUEST['ORDER_STATUS'] ?? null;

// Usa email con priorità a LICENSED_TO_EMAIL
if ($licensed_email && filter_var($licensed_email, FILTER_VALIDATE_EMAIL)) {
    $email = $licensed_email;
} elseif ($customer_email && filter_var($customer_email, FILTER_VALIDATE_EMAIL)) {
    $email = $customer_email;
} else {
    http_response_code(400);
    exit("Invalid or missing email.");
}

// Procedi solo se l'ordine è stato processato
if (strtolower($order_status) !== 'processed') {
    exit("Order not processed.");
}

// Calcola il codice per oggi e domani
$secret = "P@ssW0rd-Key";
date_default_timezone_set('Europe/Rome');
$today = date("Y-m-d");
$tomorrow = date("Y-m-d", strtotime("+1 day"));
$input = "$today|$tomorrow";
$code = strtoupper(substr(hash_hmac("sha256", $input, $secret), 0, 10));

// Prepara l'email
$subject = "Your Photo Cartoon | Cartoonizer License Code";
$message = "Hello!

"
         . "Thank you for your purchase.

"
         . "🔓 Your license code is:
"
         . "$code

"
         . "This code is valid for:
"
         . "➡️ ($today) and ($tomorrow)

"
         . "Enter it in the extension to unlock PRO features and download images without watermark!

"
         . "Enjoy!
PhotoCartoon Team";

$headers = "From: support@photocartoon.net\r\n";
$headers .= "Cc: webservice2t@gmail.com\r\n";

// Invia email
mail($email, $subject, $message, $headers);

// Log semplice opzionale
file_put_contents("ipn_log.txt", "[" . date("Y-m-d H:i:s") . "] Sent code to: $email\n", FILE_APPEND);
?>
