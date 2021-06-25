<?php

namespace App;

class Fizzbuzz {
    public function fizzApp() {

        $results = array();
        $output = "";
        $count = array();

        for ($i = 1; $i <= 20; $i++) {
            if ($i == 3 || strpos($i, '3')) {
                echo 'Lucky ';
                $output = 'Lucky';
                ++$count[0];
            } elseif ($i % 15 == 0) {
                echo 'FizzBuzz ';
                $output = 'FizzBuzz';
                ++$count[1];
            } elseif ($i % 3 == 0) {
                echo 'Fizz ';
                $output = 'Fizz';
                ++$count[2];
            } elseif ($i % 5 == 0) {
                echo 'Buzz ';
                $output = 'Buzz';
                ++$count[3];
            } else {
                echo "{$i} ";
                $output = $i;
                ++$count[4];
            }

          $results[$i] = $output;

        }

        echo "\n";
        echo "Fizz: " . $count[2] . "\n";;
        echo "Buzz: " . $count[3] . "\n";;
        echo "FizzBuzz: " . $count[1] . "\n";;
        echo "Lucky: " . $count[0] . "\n";
        echo "Integer: " . $count[4] . "\n";;

        return $results;
    }
}