<?php namespace Kata;

/**
 * Class ChrisHollandInterviewQuestions
 * @package Katas\InterviewQuestions
 */
class ChrisHollandInterviewQuestions
{
    /**
     * @param CurrencyContract $currency
     * @return mixed
     */
    public function convert(CurrencyContract $currency)
    {
        return $currency->getQuantity() * $currency->getRate();
    }
}