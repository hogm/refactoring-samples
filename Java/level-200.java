public class Main {
    private static final String FIZZ_TEXT = "Fizz";
    private static final String BUZZ_TEXT = "Buzz";
    private static final int FIZZ_NUMBER = 3;
    private static final int BUZZ_NUMBER = 5;
    private static final int LOOP_COUNT = 100;

    public static void main(String[] args) {
        for (int i=1; i<=LOOP_COUNT; i++) {
            if (i % (FIZZ_NUMBER * BUZZ_NUMBER) == 0) {
                System.out.println(FIZZ_TEXT + BUZZ_TEXT);
            } else if (i % FIZZ_NUMBER == 0) {
                System.out.println(FIZZ_TEXT);
            } else if (i % BUZZ_NUMBER == 0) {
                System.out.println(BUZZ_TEXT);
            } else {
                System.out.println(i);
            }
        }
    }
}
