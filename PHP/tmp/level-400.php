<?php
    for($i = 1; $i <= 100; $i++) {
        if (is_fizz_buzz($i)) {
            echo 'FizzBuzz', "\n";
        } else if (is_fizz($i)) {
            echo 'Fizz', "\n";
        } else if (is_buzz($i)) {
            echo 'Buzz', "\n";
        } else {
            echo $i, "\n";
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
