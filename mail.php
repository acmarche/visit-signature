<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

$compiledfile = file_get_contents('compiled.html');

$dotenv = new Dotenv();
try {
    $dotenv->load(__DIR__.'/.env');
} catch (\Exception $exception) {
    echo "error load env: ".$exception->getMessage();
}

$dsn = $_ENV['MAILER_DSN'];
$to = $_ENV['TO'];
$from = $_ENV['FROM'];
$transport = Transport::fromDsn($dsn);
$mailer = new Mailer($transport);
$email = new Email();
$email
    ->subject('Coucou')
    ->from($from)
    ->to($to)
    ->html($compiledfile);

try {
    $mailer->send($email);
} catch (TransportExceptionInterface $e) {
    echo $e->getMessage();
}
