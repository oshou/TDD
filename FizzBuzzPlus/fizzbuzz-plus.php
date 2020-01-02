<?php

namespace TDD;

class FizzBuzzPlus
{
    public function answer(int $n)
    {
        if ($this->isRelated3($n)) {
            return '...Fizz...';
        }
        if ($this->isRelated5($n)) {
            return '...Buzz...';
        }
        return 1;
    }

    public function isRelated3(int $n): bool
    {
        return (($n % 3 === 0) || strpos((string) $n, "3") !== false);
    }

    public function isRelated5(int $n): bool
    {
        return (($n % 5 === 0) || strpos((string) $n, "5") !== false);
    }
}
