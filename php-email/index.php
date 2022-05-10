<?php

$to = "jaym.github@gmail.com";
$subject = "Email By PHP";

$message = "This is the message"; 
//message can also be in html format, wherein passing content-type is mandatory

$headers = "From: <jay.malave73@gmail.com>";


mail($to, $subject, $message, $headers);

echo "Mail is sent";

?>