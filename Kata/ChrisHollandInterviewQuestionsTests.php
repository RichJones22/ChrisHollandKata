<?php namespace Kata;

use PHPUnit_Framework_TestCase;

class ChrisHollandInterviewQuestionsTests extends PHPUnit_Framework_TestCase
{
    /**
     * @var ChrisHollandInterviewQuestions
     */
    private $chrisHollandInterviewQuestions;


    public function setUp()
    {
        $this->chrisHollandInterviewQuestions = new ChrisHollandInterviewQuestions();
    }

    // 1. convert EUR to USD; conversion BID rate is 1.09814.
    public function test_convert_EUR_to_USD()
    {
        $rate = (new CurrencyRateService('EURUSD'))->getExchangeRate();

        $result = $this->chrisHollandInterviewQuestions
            ->convert(new Currency($rate));

        $this->assertEquals(1.09814, $result);
    }

    // 1a. convert 6 EUR to USD; conversion BID rate is 1.09814.
    public function test_convert_EUR_to_USD_for_quantity()
    {
        $rate = (new CurrencyRateService('EURUSD'))->getExchangeRate();

        $result = $this->chrisHollandInterviewQuestions
            ->convert(new CurrencyQuantity(6, $rate));

        $this->assertEquals(6.58884, $result);
    }

    // 2. convert GBP to USD; conversion BID rate is 1.21852.
    public function test_convert_GBP_to_USD()
    {
        $rate = (new CurrencyRateService('GPBUSD'))->getExchangeRate();

        $result = $this->chrisHollandInterviewQuestions
            ->convert(new Currency($rate));

        $this->assertEquals(1.21852, $result);
    }

    // 2a. convert 123 GBP to USD; conversion BID rate is 1.21852.
    public function test_convert_GBP_to_USD_for_quantity()
    {
        $rate = (new CurrencyRateService('GPBUSD'))->getExchangeRate();

        $result = $this->chrisHollandInterviewQuestions
            ->convert(new CurrencyQuantity(123, $rate));

        $this->assertEquals(149.87796, $result);
    }

    // 3. convert GBP to JPY; conversion BID rate is 127.583.
    public function test_convert_GBP_to_JPY()
    {
        $rate = (new CurrencyRateService('GBPJPY'))->getExchangeRate();

        $result = $this->chrisHollandInterviewQuestions
            ->convert(new Currency($rate));

        $this->assertEquals(127.583, $result);
    }

    // 3a. convert 100 GBP to 12758.3 JPY; conversion BID rate is 127.583.
    public function test_convert_GBP_to_JPY_for_quantity()
    {
        $rate = (new CurrencyRateService('GBPJPY'))->getExchangeRate();

        $result = $this->chrisHollandInterviewQuestions
            ->convert(new CurrencyQuantity(100, $rate));

        $this->assertEquals(12758.3, $result);
    }

}