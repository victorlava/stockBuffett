<?php

namespace StockBuffett\Action\AlphaVantage;


class Daily extends Base
{
    const FUNCTION_NAME = 'TIME_SERIES_DAILY';

    public function __construct(string $symbol)
    {
        parent::__construct();
        $this->setFunction(self::FUNCTION_NAME);
        $this->setSymbol($symbol);
    }

}

