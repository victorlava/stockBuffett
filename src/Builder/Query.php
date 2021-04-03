<?php

namespace StockBuffett\Builder;

use StockBuffett\Action\BaseAction;
use Symfony\Component\HttpFoundation\Request;
use StockBuffett\Constant\AlphaVantage as Constant;
use GuzzleHttp\Client;

class Query
{

    public $key;

    public $endpoint;

    public $funcName;

    public $symbol;

    public $params = [];

    public function key(string $key): Query
    {
        $this->key = $key;
        return $this;
    }

    public function endpoint(string $endpoint): Query
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    public function funcName(string $funcName): Query
    {
        $this->funcName = $funcName;
        return $this;
    }

    public function symbol(string $symbol): Query
    {
        $this->symbol = $symbol;
        return $this;
    }


    public function build(): Query
    {
        $params = [ 'function' => $this->funcName,
                    'symbol' => $this->symbol,
                    'apikey' => $this->key];

        $this->params = array_merge($this->params, $params);

        return $this;
    }

    public function extend(array $arrayToPush): void
    {
        $this->params[] = $arrayToPush;
    }
}


