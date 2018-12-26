<?php

// configure
$from = '<info@metwodotzero.ru>';
$sendTo = '<alexander.voronkin@gmail.com>';
$subject = 'Новое сообщение из контактной формы';
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in email
$okMessage = 'Сообщение удачно отправлено! Мы с вами скоро свяжемся =)';
$errorMessage = 'Произошла ошибка при отправке сообщения. Попробуйте ещё раз позже.';

// let's do the sending

try
{
    $emailText = "У вас новое сообщение с сайта\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
else {
    echo $responseArray['message'];
}