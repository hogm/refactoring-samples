<?php
    $a = 0;
    $b = 0;
    $c = 0;
    $d = 0;

    do {
        $a = $a + 1;
        $b = $a % 3;
        $c = $a % 5;
        $d = $a % 15;

        if ($d = 0) {
            echo "FizzBuzz", "\n";
            continue
        }

        if ($b = 0) {
            echo "Fizz", "\n";
            continue
        }

        if ($c = 0) {
            echo "Buzz", "\n";
            continue
        }

        echo $a, "\n";
    } while($a < 100);
?>
