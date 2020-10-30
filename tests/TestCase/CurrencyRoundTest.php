<?php
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

    }

    public function testRoundException()
    {
        $this->expectException(InvalidArgumentException::class);
        CurrencyRound::round(55.00, 0);
    }

}