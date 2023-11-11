<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Invalid request');
}
$to = 'contato@mechamaai.com.br';
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$from = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

if (filter_var($from, FILTER_VALIDATE_EMAIL)) {
    $headers = [
        'From' => ($name ? "<$name> " : '') . $from,
        'X-Mailer' => 'PHP/' . phpversion()
    ];

    try {

        $send = mail($to, $subject, $message . "\r\n\r\nfrom: " . $_SERVER['REMOTE_ADDR'], $headers);
        if ($send) {
            echo "E-mail enviado com sucesso!";
        }
    } catch (\Throwable $th) {
        //throw $th;
        echo $th;
    }

    die();
} else {
    die('Invalid address');
}
