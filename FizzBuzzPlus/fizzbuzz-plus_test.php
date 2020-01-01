<?php

require "vendor/autoload.php";
require "FizzBuzzPlus/fizzbuzz-plus.php";

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
    }
}
