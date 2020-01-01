<?php

namespace AtCoder;

require_once "vendor/autoload.php";

class Sample
{
    public function solve(string $input): string
    {
        $len = strlen($input);

        for ($i = 0; $i < $len; $i++) {
            $currentChar = $input[$i];
            if (
                $this->isEvenCharL($i, $currentChar) ||
                $this->isOddCharR($i, $currentChar)
            ) {
                return 'No';
            }
        }
        return 'Yes';
    }

    public function isEvenCharL($index, $currentChar)
    {
        return ($index % 2 == 0 && $currentChar === 'L');
    }

    public function isOddCharR($index, $currentChar)
    {
        return ($index % 2 == 1 && $currentChar === 'R');
    }
}
