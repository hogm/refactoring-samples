<?php
    /*
        Main.php
    */
    new FizzBuzz(1,100).run();
?>


<?php
/*
 *  File name:
 *      FizzBuzz.php
 *  Description:
 *  　　最初の数値から最後の数値までを数えていき
 *  　　　3 の倍数なら Fizz
 *  　　　5 の倍数なら Buzz
 *  　　　3 の倍数かつ 5 の倍数なら FizzBuzz
 *  　　　それ以外は、その数字
 *  　　を標準出力するクラス
 *  Parameters:
 *      firstNumber 最初の数値
 *      lastNumber  最後の数値
 */
 Class FizzBuzz
 {
    private $firstNumber;
    private $lastNumber;

    public function __construct($firstNumber, $lastNumber) {
        $this->firstNumber = $firstNumber;
        $this->lastNumber = $lastNumber;
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
}
?>
