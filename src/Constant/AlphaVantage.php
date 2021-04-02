<?php

namespace StockBuffet\Constant;


class AlphaVantage
{
    const PROVIDER_NAME = 'AlphaVantage';
    const CONTENT_TYPE = 'application/json';
    const CHARSET = 'UTF-8';

    const LIVE_ENDPOINT = 'https://www.alphavantage.co/query?';

    const API_KEY = 'F1TCI4T646UZUCZM';

    const ACTION_CATEGORIES = [
        self::CATEGORY_STOCK_TIME_SERIES => [self::ACTION_GET_QUOTE, self::ACTION_GET_INTRADAY],
        self::CATEGORY_FUNDAMENTAL_DATA => []
    ];

    const CATEGORY_STOCK_TIME_SERIES = 'StockTimeSeries';
    const CATEGORY_FUNDAMENTAL_DATA = 'FundamentalData';

    const ACTION_GET_QUOTE = 'QuoteEndpoint';
    const ACTION_GET_INTRADAY = 'Intraday';

}
