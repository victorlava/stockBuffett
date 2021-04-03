<?php

require '../vendor/autoload.php';

$stock = new \StockBuffett\Provider\AlphaVantage();
echo $stock->getTodaysStockPrice('IBM');
