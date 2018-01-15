public class Main {
    private static final int LOOP_COUNT = 100;

    public static void main(String[] args) {
        for (int i=1; i<=LOOP_COUNT; i++) {
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
