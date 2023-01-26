<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "your@email.com";

$subject = "Nouveau message de $name";

$message = "Nom: $name\n\nEmail: $email\n\nMessage: $message";

mail($to, $subject, $message);

?>