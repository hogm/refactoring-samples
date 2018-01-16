<?php
    const FIRST_NUMBER = 1;
    const LAST_NUMBER = 100;

    for($i = FIRST_NUMBER; $i <= LAST_NUMBER; $i++) {
        echo to_fizz_buzz_string($i), "\n";
    }

    function to_fizz_buzz_string($number) {
        $value = is_fizz($number) ? 'Fizz' : '';
        $value .= is_buzz($number) ? 'Buzz' : '';
        return empty($value) ? (string) $number : $value;
    }

    function is_fizz($number) {
        return $number % 3 == 0;
    }

    function is_buzz($number) {
        return $number % 5 == 0;
    }
?>
