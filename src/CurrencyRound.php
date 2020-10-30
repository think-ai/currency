<?php
declare(strict_types=1);
namespace ThinkAi;

use InvalidArgumentException;

/**
 * Class CurrencyRound
 *
 * @package ThinkAi
 */
class CurrencyRound
{
    public const ROUND_UP = 1;

    public const ROUND_DOWN = -1;

    /**
     * @param  float $amount
     * @param  float $multiply
     * @param  int   $roundUpOrDown
     * @return float
     */
    public static function round(float $amount, float $multiply = 0.01, int $roundUpOrDown = -1) : float
    {
        if ($multiply <= 0) {
            throw new InvalidArgumentException("Argument 2 cannot be less than or Equal to Zero");
        }
        if ($roundUpOrDown === self::ROUND_UP) {
            return ceil($amount/$multiply)*$multiply;
        } elseif ($roundUpOrDown === self::ROUND_DOWN) {
            return floor($amount/$multiply)*$multiply;
        }
        throw new InvalidArgumentException("Argument 3 can be only 1 or -1");
    }
}
