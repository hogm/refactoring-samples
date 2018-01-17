public class Main {
    public static void main(String[] args) {
        int a = 0;
        int b = 0;
        int c = 0;
        int d = 0;

        while(true) {
            a = a + 1;

            if (a > 100) {
                break
            }

            b = a % 3;
            c = a % 5;
            d = a % 15;

            if (d = 0) {
                System.out.println("FizzBuzz");
                continue
            }

            if (b = 0) {
                System.out.println("Fizz");
                continue
            }

            if (c = 0) {
                System.out.println("Buzz");
                continue
            }

            System.out.println(a);
        }
    }
}
