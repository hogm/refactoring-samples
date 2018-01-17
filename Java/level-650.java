public class Main {
    public static void main(String[] args) {
        final int FIRST_NUMBER = 1;
        final int LAST_NUMBER = 100;

        for (int i = FIRST_NUMBER; i <= LAST_NUMBER; i++) {
            System.out.println(toFizzBuzzNumber(i));
        }
    }

    private static String toFizzBuzzNumber(int number) {
        return toFizzBuzz(number).isEmpty() ? String.valueOf(number) : toFizzBuzz(number);
    }

    private static String toFizzBuzz(int number) {
        return toFizz(number) + toBuzz(number);
    }

    private static String toFizz(int number) {
        return isFizz(number) ? "Fizz" : "";
    }

    private static String toBuzz(int number) {
        return isBuzz(number) ? "Buzz" : "";
    }

    private static boolean isFizz(int number) {
        return number % 3 == 0;
    }

    private static boolean isBuzz(int number) {
        return number % 5 == 0;
    }
}
