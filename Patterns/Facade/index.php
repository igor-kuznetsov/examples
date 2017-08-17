<?php

namespace Examples\Patterns\Facade;

require_once '../../autoload.php';

$computer = new Facade(new PcBios(), new Linux());
$computer->turnOn();
$computer->turnOff();