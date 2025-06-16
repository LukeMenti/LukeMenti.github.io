<?php
// recuperi i dati
$name    = trim($_POST['name']);
$email   = trim($_POST['email']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

// Qui, metti la TUA email dove vuoi ricevere i messaggi:
$to = 'lucamenti99@gmail.com';

// Headers
$headers  = "From: \"$name\" <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// invio
if( mail($to, $subject, $message, $headers) ) {
    echo "OK";
} else {
    echo "ERROR";
}
