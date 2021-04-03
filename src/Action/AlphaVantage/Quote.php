<?php

namespace StockBuffett\Action\AlphaVantage;


class Quote extends Base
{
    const FUNCTION_NAME = 'GLOBAL_QUOTE';

    public function __construct(string $symbol)
    {
        parent::__construct();
        $this->setFunction(self::FUNCTION_NAME);
        $this->setSymbol($symbol);
    }

}

