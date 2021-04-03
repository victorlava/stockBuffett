<?php

namespace StockBuffett\Constant;


class AlphaVantage
{
    const PROVIDER_NAME = 'AlphaVantage';
    const CONTENT_TYPE = 'application/json';
    const CHARSET = 'UTF-8';

    const LIVE_ENDPOINT = 'https://www.alphavantage.co/query';

    const API_KEY = 'F1TCI4T646UZUCZM';

    const ACTION_CATEGORIES = [
        self::CATEGORY_STOCK_TIME_SERIES => [self::ACTION_GET_QUOTE, self::ACTION_GET_INTRADAY],
        self::CATEGORY_FUNDAMENTAL_DATA => []
    ];

    const CATEGORY_STOCK_TIME_SERIES = 'StockTimeSeries';
    const CATEGORY_FUNDAMENTAL_DATA = 'FundamentalData';

    // TODO: use these in the child classes dynamically
    const ACTION_GET_QUOTE = 'GLOBAL_QUOTES';
    const ACTION_GET_INTRADAY = 'TIME_SERIES_INTRADAY';

}
