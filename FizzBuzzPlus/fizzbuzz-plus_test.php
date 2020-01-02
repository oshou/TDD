<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . "/fizzbuzz-plus.php";

use PHPUnit\Framework\TestCase;
use TDD\FizzBuzzPlus;

class FizzBuzzPlusTest extends TestCase
{
    /**
     * @test
     */
    public function testFizzBuzzPlus()
    {
        $fizzbuzzplus = new FizzBuzzPlus();
        $this->assertEquals(1, $fizzbuzzplus->answer(1));
        $this->assertEquals("...Fizz...", $fizzbuzzplus->answer(3));
        $this->assertEquals("...Fizz...", $fizzbuzzplus->answer(13));
        $this->assertEquals("...Fizz...", $fizzbuzzplus->answer(31));
        $this->assertEquals("...Fizz...", $fizzbuzzplus->answer(32));
        $this->assertEquals("...Fizz...", $fizzbuzzplus->answer(34));
        $this->assertEquals("...Buzz...", $fizzbuzzplus->answer(5));
        $this->assertEquals("...Buzz...", $fizzbuzzplus->answer(52));
        $this->assertEquals("...Fizz...", $fizzbuzzplus->answer(53));
        $this->assertEquals("...Fizz...", $fizzbuzzplus->answer(54));
        $this->assertEquals("...Buzz...", $fizzbuzzplus->answer(55));
        $this->assertEquals("...Buzz...", $fizzbuzzplus->answer(151));
    }
}
