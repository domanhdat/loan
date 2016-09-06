<?php
include __DIR__.'/vendor/autoload.php';

use Zend\Mail\Message;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Zend\Mail\Transport\SmtpOptions;

session_start();

date_default_timezone_set('Asia/Ho_Chi_Minh');

if( !isset($_POST['name']) || strtoupper($_POST['captcha']) != $_SESSION['captcha_id'] ){
    echo json_encode(['message' => 'co loi roi']);

    return ;
}

$message = new Message();
$message->addTo('dodat10.93@gmail.com')
        ->addFrom($_POST['email'])
        ->setSubject($_POST['subject'])
        ->setBody($_POST['message']);

// Setup SMTP transport using LOGIN authentication
$transport = new SmtpTransport();
$options   = new SmtpOptions([
    'name'              => 'smtp.gmail.com',
    'host'              => 'smtp.gmail.com',
    'connection_class'  => 'login',
    'connection_config' => [
        'username' => 'dodat10.93@gmail.com',
        'password' => 'thangkianobiet',
        'ssl' => 'tls'
    ],
]);
$transport->setOptions($options);
$transport->send($message);

echo json_encode(['message' => 'thanh cong']);
return;