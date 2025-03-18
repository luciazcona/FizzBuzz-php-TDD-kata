<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    private const int BUZZ_NUMBER = 5;
    private const int FIZZ_NUMBER = 3;

    public function main(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            echo $this->convert($i) . "\n";
        }
    }

    public function convert($number): string
    {
        if ($this->isFizzBuzz($number)) {
            return 'FizzBuzz';
        }

        if ($this->isFizz($number)) {
            return 'Fizz';
        }

        if ($this->isBuzz($number)) {
            return 'Buzz';
        }

        return $number;
    }

    private function isFizz($number): bool
    {
        return $number % self::FIZZ_NUMBER === 0;
    }

    private function isBuzz($number): bool
    {
        return $number % self::BUZZ_NUMBER === 0;
    }

    private function isFizzBuzz($number): bool
    {
        return ($number % self::FIZZ_NUMBER === 0) and ($number % self::BUZZ_NUMBER === 0);
    }

}
