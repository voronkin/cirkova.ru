
<?php
$to      = 'alexander.voronkin@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: info@metwodotzero.ru' . "\r\n" .
    'Reply-To: info@metwodotzero.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
