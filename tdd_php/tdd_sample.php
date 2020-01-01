<?php

require_once "vendor/autoload.php";
require_once "tdd.php";

use \PHPUnit\Framework\TestCase;
use \AtCoder\Sample;


class SampleTest extends TestCase
{
    private $sample;

    protected function setUp(): void
    {
        $this->sample = new Sample();
    }

    /**
     * @test
     */
    public function 文字Rを渡した時、文字列Yesを返す()
    {
        $this->assertSame('Yes', $this->sample->solve('R'));
    }

    /**
     * @test
     */
    public function 文字Lを渡した時、Noを返す()
    {
        $this->assertSame('No', $this->sample->solve('L'));
    }

    /**
     * @test
     */
    public function 文字列UULを渡した時、Noを返す()
    {
        $this->assertSame('No', $this->sample->solve('UUL'));
    }

    /**
     * @test
     */
    public function 文字列URUを渡した時、Noを返す()
    {
        $this->assertSame('No', $this->sample->solve('URU'));
    }
}
