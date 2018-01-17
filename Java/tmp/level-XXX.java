public class Main {
    public static void main(String[] args) {
        for(int i = 1; i <= 100; i++) {
            System.out.println(to_fizz_buzz(i).isEmpty() ? String.valueOf(i) : to_fizz_buzz(i));
        }
    }

    private static String to_fizz_buzz(int i) {
        return (i % 3 == 0 ? "Fizz" : "")
             + (i % 5 == 0 ? "Buzz" : "");
    }
}
