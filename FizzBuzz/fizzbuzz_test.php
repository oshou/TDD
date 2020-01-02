<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . "/fizzbuzz.php";

use PHPUnit\Framework\TestCase;
use TDD\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $fizzbuzz;

    public function setUp(): void
    {
        $this->fizzbuzz = new FizzBuzz();
    }

    /**
     * @test
     */
    public function testFizzBuzz()
    {
        $this->assertEquals(1, $this->fizzbuzz->answer(1));
        $this->assertEquals('Fizz', $this->fizzbuzz->answer(3));
        $this->assertEquals('Buzz', $this->fizzbuzz->answer(5));
        $this->assertEquals('Fizz', $this->fizzbuzz->answer(6));
        $this->assertEquals('Buzz', $this->fizzbuzz->answer(10));
        $this->assertEquals('FizzBuzz', $this->fizzbuzz->answer(15));
        $this->assertEquals(16, $this->fizzbuzz->answer(16));
    }
}
