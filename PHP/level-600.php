<?php
    const FIRST_NUMBER = 1;
    const LAST_NUMBER = 100;

    for($i = FIRST_NUMBER; $i <= LAST_NUMBER; $i++) {
        echo toFizzBuzzString($i), "\n";
    }

    function toFizzBuzzString($number) {
      $value = isFizz($number) ? 'Fizz' : '';
      $value .= isBuzz($number) ? 'Buzz' : '';
      return empty($value) ? (string) $number : $value;
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
