<?php

require '../vendor/autoload.php';

$test = new \StockBuffett\Action\AlphaVantage\Quote('IBM');
$test->initialize();
echo $test->fire();