public class Main {
    private static final String FIZZ_TEXT = "Fizz";
    private static final String BUZZ_TEXT = "Buzz";
    private static final int LOOP_COUNT = 100;

    public static void main(String[] args) {
        for (int i=1; i<=LOOP_COUNT; i++) {
            if (isFizzBuzz(i)) {
                System.out.println(FIZZ_TEXT + BUZZ_TEXT);
            } else if (isFizz(i)) {
                System.out.println(FIZZ_TEXT);
            } else if (isBuzz(i)) {
                System.out.println(BUZZ_TEXT);
            } else {
                System.out.println(i);
            }
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
