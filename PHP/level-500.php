<?php
    const LOOP_COUNT = 100;

    for($i = 1; $i <= LOOP_COUNT; $i++) {
        echo toFizzBuzzString($i), "\n";
    }

    function toFizzBuzzString($number) {
        if (isFizzBuzz($number)) {
            return "FizzBuzz";
        } else if (isFizz($number)) {
            return "Fizz";
        } else if (isBuzz($number)) {
            return "Buzz";
        } else {
            return (string) $number;
        }
    }

    function isFizzBuzz($number) {
        return isFizz($number) && isBuzz($number);
    }

    function isFizz($number) {
        return $number % 3 == 0;
    }

    function isBuzz($number) {
        return $number % 5 == 0;
    }
?>
