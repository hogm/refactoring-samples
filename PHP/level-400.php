<?php
    for($i = 1; $i <= 100; $i++) {
        if (isFizzBuzz($i)) {
            echo "FizzBuzz", "\n";
        } else if (isFizz($i)) {
            echo "Fizz", "\n";
        } else if (isBuzz($i)) {
            echo "Buzz", "\n";
        } else {
            echo $i, "\n";
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
