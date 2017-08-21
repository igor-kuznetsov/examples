<?php

namespace Examples\Composer;

require_once 'vendor/autoload.php';

use Examples\Composer\Lib\App;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use PHPMailer;

$logger = new Logger('test');
$logger->pushHandler(new StreamHandler('log.txt', Logger::WARNING));
$logger->warning('some test warning goes here');
$logger->error('some error goes here');

//$app = new App();
//$app->run();

//$mailer = new PHPMailer();
//$mailer->isSMTP(); // set to use SMTP
//$mailer->Host = 'smtp.gmail.com'; // SMTP host
//$mailer->SMTPAuth = true; // enable SMTP auth
//$mailer->Username = 'igor.kuznetsov.smtp@gmail.com'; // SMTP user
//$mailer->Password = 'MD56kq123!'; // SMTP password
//$mailer->SMTPSecure = 'tls'; // enable TLS encryption
//$mailer->Port = 587; // SMTP port
//
//$mailer->setFrom('admin@example.com', 'Admin'); // send from email
//$mailer->addReplyTo('info@example.com', 'Info'); // reply to email
//$mailer->addAddress('softerix@gmail.com', 'Igor Kuznetsov'); // recipient email
//$mailer->addCC('webdevastator@gmail.com'); // cc email
//$mailer->addBCC('igdesign@i.ua'); // bcc email
//$mailer->addAttachment('');
//$mailer->isHTML(true);
//$mailer->Subject = 'Very Important Message';
//$mailer->Body = '<h1>Test</h1><p>Test message in <b>HTML</b> format.</p>';
//$mailer->AltBody = 'Test message in plain text format'; // if HTML is not supported
//
//if ($mailer->send()) {
//    echo 'Message has been sent';
//} else {
//    echo 'Mailer error: '.$mailer->ErrorInfo;
//}