<?php

require '../vendor/autoload.php';

$test = new \StockBuffett\Action\AlphaVantage\Quote();
$test->initialize();
echo $test->fire();