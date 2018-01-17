public class Main {
    public static void main(String[] args) {
        final int FIRST_NUMBER = 1;
        final int LAST_NUMBER = 100;

        for (int i = FIRST_NUMBER; i <= LAST_NUMBER; i++) {
            System.out.println(toFizzBuzzString(i));
        }
    }

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
