<?php
/*
 *  File name:
 *      Main.php
 */
    require('FizzBuzz.php');
    $fizzBuzz = new FizzBuzz(1,100);
    $fizzBuzz->run();
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
 *      first_number 最初の数値
 *      last_number  最後の数値
 */
 Class FizzBuzz
 {
    private $first_number;
    private $last_number;

    public function __construct($first_number, $last_number) {
        $this->first_number = $first_number;
        $this->last_number = $last_number;
    }

    public function run() {
        for($i = $this->first_number; $i <= $this->last_number; $i++) {
            echo $this->to_fizz_buzz_number($i), "\n";
        }
    }

    private function to_fizz_buzz_number($number) {
        return empty($this->to_fizz_buzz($number)) ? (string) $number : $this->to_fizz_buzz($number);
    }

    private function to_fizz_buzz($number) {
        return $this->to_fizz($number) . $this->to_buzz($number);
    }

    private function to_fizz($number) {
        return $this->is_fizz($number) ? 'Fizz' : '';
    }

    private function to_buzz($number) {
        return $this->is_buzz($number) ? 'Buzz' : '';
    }

    private function is_fizz($number) {
        return $number % 3 == 0;
    }

    private function is_buzz($number) {
        return $number % 5 == 0;
    }
}
?>
