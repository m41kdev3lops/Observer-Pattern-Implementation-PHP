<?php

require 'vendor/autoload.php';

use App\Sensor;
use App\LcdDisplay;
use App\SmartPhone;

$sensor = new Sensor;

$phone = new SmartPhone($sensor);
$display = new LcdDisplay($sensor);

$sensor->add($phone);
$sensor->add($display);

$sensor->setTempreature(23.5);

$sensor->remove($phone);

$sensor->notify();
