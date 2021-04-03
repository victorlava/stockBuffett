<?php

namespace StockBuffett\Action\AlphaVantage;

use StockBuffett\Action\BaseAction;
use Symfony\Component\HttpFoundation\Request;
use StockBuffett\Constant\AlphaVantage as Constant;
use GuzzleHttp\Client;
use StockBuffett\Builder\Query;

abstract class Base implements BaseAction
{

    protected $symbol;

    protected $funcName;

    protected $client;

    public $api;

    public function __construct()
    {
        $this->api = new Query();
    }

    public function fire(): string
    {
        $response = $this->client->request('GET', $this->api->endpoint, [
            'query' => $this->api->params
        ]);

        return (string) $response->getBody();
    }

    public function initialize(): void
    {
        $this->client = new Client();

        $this->api->key(Constant::API_KEY)
                ->endpoint(Constant::LIVE_ENDPOINT)
                ->funcName($this->getFuncName())
                ->symbol($this->getSymbol())
                ->build();

    }

    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }

    public function setFunction(string $funcName): void
    {
        $this->funcName = $funcName;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getFuncName(): string
    {
        return $this->funcName;
    }
}

