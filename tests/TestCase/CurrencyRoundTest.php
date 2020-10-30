<?php
declare(strict_types=1);
namespace Test\TestCase;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use ThinkAi\CurrencyRound;

/**
 * Class CurrencyRoundTest
 * @package Test\TestCase
 */
class CurrencyRoundTest extends TestCase
{
    public function testRound()
    {
        $result = CurrencyRound::round(51.32, 0.05);
        $this->assertEquals(51.30, $result);

        $result = CurrencyRound::round(55.99, 0.50);
        $this->assertEquals(55.50, $result);

        $result = CurrencyRound::round(55.99, 0.50, CurrencyRound::ROUND_UP);
        $this->assertEquals(56, $result);

    }

    public function testRoundExceptionInvalidMultiplyArgument()
    {
        $this->expectException(InvalidArgumentException::class);
        CurrencyRound::round(55.00, 0);
    }

    public function testRoundExceptionInvalidRoundUpOrDownArgument()
    {
        $this->expectException(InvalidArgumentException::class);
        CurrencyRound::round(55.00, 2, 3);
    }

}