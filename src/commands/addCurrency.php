<?php

require dirname(__DIR__, 2) . '/vendor/autoload.php';

use testTask\services\AddRemoveCurrency;

$currency = $argv[1];

$addCurrensyService = new AddRemoveCurrency();

$addCurrensyService->addCurrency($currency);