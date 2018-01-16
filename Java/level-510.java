public class Main {
    private static final String FIZZ_TEXT = "Fizz";
    private static final String BUZZ_TEXT = "Buzz";
    private static final int FIRST_NUMBER = 1;
    private static final int LAST_NUMBER = 100;

    public static void main(String[] args) {
        for (int i = FIRST_NUMBER; i <= LAST_NUMBER; i++) {
            System.out.println(toFizzBuzzString(i));
        }
    }

    private static String toFizzBuzzString(int number) {
        if (isFizzBuzz(number)) {
            return FIZZ_TEXT + BUZZ_TEXT;
        } else if (isFizz(number)) {
            return FIZZ_TEXT;
        } else if (isBuzz(number)) {
            return BUZZ_TEXT;
        } else {
            return String.valueOf(number);
        }
    }

    private static boolean isFizzBuzz(int number) {
        return isFizz(number) && isBuzz(number);
    }

    private static boolean isFizz(int number) {
        final int FIZZ_NUMBER = 3;
        return number % FIZZ_NUMBER == 0;
    }

    private static boolean isBuzz(int number) {
        final int BUZZ_NUMBER = 5;
        return number % BUZZ_NUMBER == 0;
    }
}
