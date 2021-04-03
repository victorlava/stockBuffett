<?php

require '../vendor/autoload.php';

$test = new \StockBuffett\Action\AlphaVantage\Daily('IBM');
$test->initialize();
echo $test->fire();