<?php
    const FIRST_NUMBER = 1;
    const LAST_NUMBER = 100;

    for($i = FIRST_NUMBER; $i <= LAST_NUMBER; $i++) {
        echo to_fizz_buzz_string($i), "\n";
    }

    function to_fizz_buzz_string($number) {
        if (is_fizz_buzz($number)) {
            return 'FizzBuzz';
        } else if (is_fizz($number)) {
            return 'Fizz';
        } else if (is_buzz($number)) {
            return 'Buzz';
        } else {
            return (string) $number;
        }
    }

    function is_fizz_buzz($number) {
        return is_fizz($number) && is_buzz($number);
    }

    function is_fizz($number) {
        return $number % 3 == 0;
    }

    function is_buzz($number) {
        return $number % 5 == 0;
    }
?>
