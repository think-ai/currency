<?php
namespace ThinkAi;
use InvalidArgumentException;

/**
 * Class CurrencyRound
 * @package ThinkAi
 */
class CurrencyRound
{
    /**
     * @param float $amount
     * @param float $multiply
     * @throws InvalidArgumentException
     * @return float
     */
    public static function round(float $amount, float $multiply = 0.01) : float
    {
        if ( $multiply <= 0 ) {
            throw new InvalidArgumentException("Argument 2 cannot be less than or Equal to Zero");
        }
        return floor($amount/$multiply)*$multiply;
    }
}