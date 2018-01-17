<?php
for($i = 0; $i <= 100; $i++)
    echo empty(to_fizz_buzz($i)) ? (string) $i : to_fizz_buzz($i), "\n";

function to_fizz_buzz($i) {
    return ($i % 3 == 0 ? 'Fizz' : '')
          .($i % 5 == 0 ? 'Buzz' : '');
}
?>
