<?php

require "vendor/autoload.php";

use Carbon\Carbon;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('composer');
$log->pushHandler(new StreamHandler(__DIR__ . '/your.log', Logger::WARNING));
$log->warning(Carbon::now());
