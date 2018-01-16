public class Main {
    private static final int FIRST_NUMBER = 1;
    private static final int LAST_NUMBER = 100;

    public static void main(String[] args) {
        for (int i = FIRST_NUMBER; i <= LAST_NUMBER; i++) {
            System.out.println(toFizzBuzzString(i));
        }
    }

    private static String toFizzBuzzString(int number) {
        String value = isFizz(number) ? "Fizz" : "";
        value += isBuzz(number) ? "Buzz" : "";
        return value.isEmpty() ? String.valueOf(number) : value;
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
