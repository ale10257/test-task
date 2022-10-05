<?php

require dirname(__DIR__, 2) . '/vendor/autoload.php';

use testTask\services\AddRemoveCurrency;

$command = readline('Choose command: add currensy (enter 1), remove currency (enter 2)' . PHP_EOL);

if ($command != 1 && $command != 2) {
    echo 'Command mast be 1 or 2' . PHP_EOL;
    exit(1);
}

$currensy = readline('Enter RUB or EUR or USD' . PHP_EOL);

$service = new AddRemoveCurrency();

if ($command == 1) {
    $service->addCurrency($currensy);
}