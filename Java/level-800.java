/*
 *  File name:
 *      Main.java
 */
public class Main {
    public static void main(String[] args) {
        new FizzBuzz(1, 100).run();
    }
}

/*
 *  File name:
 *      FizzBuzz.java
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
public class FizzBuzz {
    private int firstNumber;
    private int lastNumber;

    public FizzBuzz(int firstNumber, int lastNumber) {
        this.firstNumber = firstNumber;
        this.lastNumber = lastNumber;
    }

    public void run() {
        for (int i = firstNumber; i <= lastNumber; i++) {
            System.out.println(toFizzBuzzNumber(i));
        }
    }

    private String toFizzBuzzNumber(int number) {
        return toFizzBuzz(number).isEmpty() ? String.valueOf(number) : toFizzBuzz(number);
    }

    private String toFizzBuzz(int number) {
        return toFizz(number) + toBuzz(number);
    }

    private String toFizz(int number) {
        return isFizz(number) ? "Fizz" : "";
    }

    private String toBuzz(int number) {
        return isBuzz(number) ? "Buzz" : "";
    }

    private boolean isFizz(int number) {
        return number % 3 == 0;
    }

    private boolean isBuzz(int number) {
        return number % 5 == 0;
    }
}
