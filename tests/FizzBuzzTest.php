<?php

class FizzBuzzTest extends \PHPUnit\Framework\TestCase {
    public function test() {

        $fizzbuzz = new App\Fizzbuzz;
        $myResult = $fizzbuzz->fizzApp();

        $expectedResult = array(
            1, 2, 'Lucky', 4, 'Buzz',
            'Fizz', 7, 8, 'Fizz', 'Buzz',
            11, 'Fizz', 'Lucky', 14, 'FizzBuzz',
            16, 17, 'Fizz', 19, 'Buzz'
        );

        array_unshift($expectedResult, null);
        unset($expectedResult[0]);

        $this->assertEquals($expectedResult, $myResult);

    }
}