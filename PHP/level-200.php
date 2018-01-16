<?php
    $a = 0;
    $b = 0;
    $c = 0;
    $d = 0;

    for($a = 1; $a <= 100; $a++) {
        $b = $a % 3;
        $c = $a % 5;
        $d = $a % 15;

        if ($d == 0) {
            echo 'FizzBuzz', "\n";
        } else if ($b == 0) {
            echo 'Fizz', "\n";
        } else if ($c == 0) {
            echo 'Buzz', "\n";
        } else {
            echo $a, "\n";
        }
    }
?>
