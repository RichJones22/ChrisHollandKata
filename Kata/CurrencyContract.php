<?php namespace Kata;

/**
 * Interface CurrencyContract
 * @package Katas\InterviewQuestions
 */
interface CurrencyContract
{
    /**
     * @return mixed
     */
    public function getQuantity();

    /**
     * @return mixed
     */
    public function getRate();
}