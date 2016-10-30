<?php namespace Kata;

/**
 * Class CurrencyQuantity
 * @package Katas\InterviewQuestions
 */
class CurrencyQuantity implements CurrencyContract
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
     * CurrencyQuantity constructor.
     * @param int $quantity
     * @param mixed $rate
     */
    public function __construct(int $quantity, float $rate)
    {
        $this->quantity = $quantity;
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