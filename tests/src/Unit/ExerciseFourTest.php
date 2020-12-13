<?php


namespace Technical\Tests\Unit;


use PHPUnit\Framework\TestCase;

use Technical\Optime\Customers\GoldClient;
use Technical\Optime\Customers\PlatinumClient;
use Technical\Optime\Customers\SilverClient;

class ExerciseFourTest extends TestCase
{

    /**
     *
     * @test
     */
    function firstTest()
    {
        $platinumClient = new PlatinumClient();
        $goldClient = new GoldClient();
        $silverClient = new SilverClient();

        $this->assertEquals(
            50,
            $silverClient->pointCalculator(50, $silverClient),
            "El resultado esperado es 50");

        $this->assertEquals(
            100,
            $goldClient->pointCalculator(50, $goldClient),
            "El resultado esperado es 100");

        $this->assertEquals(
            150,
            $platinumClient->pointCalculator(50, $platinumClient),
            "El resultado esperado es 150");
    }

    /**
     *
     * @test
     */
    function secondTest()
    {
        $platinumClient = new PlatinumClient();
        $goldClient = new GoldClient();
        $silverClient = new SilverClient();

        $this->assertEquals(
            0,
            $silverClient->pointCalculator(0, $silverClient),
            "El resultado esperado es 0");

        $this->assertEquals(
            0,
            $goldClient->pointCalculator(0, $goldClient),
            "El resultado esperado es 0");

        $this->assertEquals(
            0,
            $platinumClient->pointCalculator(0,$platinumClient),
            "El resultado esperado es 0");
    }
}