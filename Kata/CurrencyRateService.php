<?php namespace Kata;

/**
 * Class CurrencyRateService
 * @package Katas\InterviewQuestions
 */
class CurrencyRateService
{

    /**
     * @var string
     */
    private $currencyPair;

    /**
     * @var array
     */
    private $currencyPairs = [
        'EURUSD' => 1.09814,
        'GPBUSD' => 1.21852,
        'GBPJPY' => 127.583,
    ];

    /**
     * CurrencyRateService constructor.
     * @param string $currencyPair
     */
    public function __construct(string $currencyPair)
    {
        $this->currencyPair = $currencyPair;
    }

    /**
     * @return mixed
     */
    public function getExchangeRate()
    {
        return $this->currencyPairs[$this->currencyPair];
    }
}