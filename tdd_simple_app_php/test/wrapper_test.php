<?php

/**
 * https://code.tutsplus.com/tutorials/lets-tdd-a-simple-app-in-php--net-26186
 */

require __DIR__ . "/../lib/wrapper.php";

use PHPUnit\Framework\TestCase;

class WrapperTest extends TestCase
{
    private $wrapper;

    function setUp(): void
    {
        $this->wrapper = new Wrapper;
    }

    public function testCanCreateAWrapper()
    {
        $this->assertSame('word', $this->wrapper->wrap('word', 5));
    }

    public function testItShouldWrapAnEmptyString()
    {
        $this->assertSame('', $this->wrapper->wrap('', 0));
    }

    public function testItDoesNotWrapAShortEnoughWord()
    {
        $textToBeParsed = 'word';
        $maxLineLength = 5;
        $this->assertSame($textToBeParsed, $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

    public function testItWrapsAWordLongerThanLineLength()
    {
        $textToBeParsed = 'alongword';
        $maxLineLength = 5;
        $this->assertSame("along\nword", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

    public function testItWrapsAWordSeveralTimesIfItsTooLong()
    {
        $textToBeParsed = 'averyverylongword';
        $maxLineLength = 5;
        $this->assertSame("avery\nveryl\nongwo\nrd", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

    public function testItWrapsTwoWordsWhenSpaceAtTheEndOfLine()
    {
        $textToBeParsed = 'word word';
        $maxLineLength = 5;
        $this->assertSame("word\nword", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

    public function testItWrap2WordsOn3Lines()
    {
        $textToBeParsed = 'word word';
        $maxLineLength = 3;
        $this->assertSame("wor\nd\nwor\nd", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }

    public function testItWraps2WordsAtBoundary()
    {
        $textToBeParsed = 'word word';
        $maxLineLength = 4;
        $this->assertSame("word\nword", $this->wrapper->wrap($textToBeParsed, $maxLineLength));
    }
}
