<?php

namespace Examples\Composer;

require_once 'vendor/autoload.php';

use Examples\Composer\Lib\App;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('test');
$logger->pushHandler(new StreamHandler('log.txt', Logger::WARNING));
$logger->warning('some test warning goes here');
$logger->error('some error goes here');

$app = new App();
$app->run();