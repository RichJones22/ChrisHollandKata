<?php namespace Kata;

/**
 * Class Currency
 * @package Katas\InterviewQuestions
 */
class Currency implements CurrencyContract
{
    /**
     * @var int
     */
    private $quantity;

    /**
     * @var float
     */
    private $rate;

    /**
     * Currency constructor.
     * @param float $rate
     */
    public function __construct(float $rate)
    {
        $this->quantity = 1;

        $this->rate = $rate;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }
}