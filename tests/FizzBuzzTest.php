<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;

    protected function setUp(): void
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     **/
    //notMultipleOfThreeOrFiveReturnNumber
    public function notFizzNumberAndNotBuzzNumberReturnNumber(): void
    {
        $result = $this->fizzBuzz->convert(1);

        $this->assertEquals('1', $result);

    }

    /**
     * @test
     **/
    public function multipleOfFizzNumberReturnsFizz(): void
    {
        $result = $this->fizzBuzz->convert(12);

        $this->assertEquals('Fizz', $result);
    }

    /**
     * @test
     **/
    public function multipleOfBuzzNumberReturnsBuzz(): void
    {
        $result = $this->fizzBuzz->convert(10);

        $this->assertEquals('Buzz', $result);
    }

    /**
     * @test
     **/
    public function multipleOfFizzNumberAndBuzzNumberReturnsFizzBuzz(): void
    {
        $result = $this->fizzBuzz->convert(15);

        $this->assertEquals('FizzBuzz', $result);
    }

}
