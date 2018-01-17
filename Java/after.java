public class Main {
    public static void main(String[] args) {
        // 1 から 100 までの数字を数えていき、
        // それぞれの数値を目的の値に変換して出力する
        final int FIRST_NUMBER = 1;
        final int LAST_NUMBER = 100;

        for (int i = FIRST_NUMBER; i <= LAST_NUMBER; i++) {
            System.out.println(toFizzBuzzString(i));
        }
    }

    // 引数の数値に対し、下記の文字列を返す
    //   3 の倍数かつ 5 の倍数なら FizzBuzz
    //   3 の倍数なら Fizz
    //   5 の倍数なら Buzz
    //   それ以外は、その数字
    private static String toFizzBuzzString(int number) {
        if (isFizzBuzz(number)) {
            return "FizzBuzz";
        } else if (isFizz(number)) {
            return "Fizz";
        } else if (isBuzz(number)) {
            return "Buzz";
        } else {
            return String.valueOf(number);
        }
    }

    private static boolean isFizzBuzz(int number) {
        return isFizz(number) && isBuzz(number);
    }

    private static boolean isFizz(int number) {
        return number % 3 == 0;
    }

    private static boolean isBuzz(int number) {
        return number % 5 == 0;
    }
}
