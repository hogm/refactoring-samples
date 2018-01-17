<?php
    // 1 から 100 までの数字を数えていき、
    // それぞれの数値を目的の値に変換して出力する
    const FIRST_NUMBER = 1;
    const LAST_NUMBER = 100;

    for($i = FIRST_NUMBER; $i <= LAST_NUMBER; $i++) {
        echo to_fizz_buzz_string($i), "\n";
    }

    // 引数の数値に対し、下記の文字列を返す
    //   3 の倍数かつ 5 の倍数なら FizzBuzz
    //   3 の倍数なら Fizz
    //   5 の倍数なら Buzz
    //   それ以外は、その数字
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
