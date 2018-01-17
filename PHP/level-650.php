<?php
    const FIRST_NUMBER = 1;
    const LAST_NUMBER = 100;
    for($i = FIRST_NUMBER; $i <= LAST_NUMBER; $i++) {
        echo to_fizz_buzz_number($i), "\n";
    }
    function to_fizz_buzz_number($number) {
        return empty(to_fizz_buzz($number)) ? (string) $number : to_fizz_buzz($number);
    }

    function to_fizz_buzz($number) {
        return to_fizz($number) . to_buzz($number);
    }

    function to_fizz($number) {
        return is_fizz($number) ? 'Fizz' : '';
    }

    function to_buzz($number) {
        return is_buzz($number) ? 'Buzz' : '';
    }

    function is_fizz($number) {
        return $number % 3 == 0;
    }

    function is_buzz($number) {
        return $number % 5 == 0;
    }
?>
