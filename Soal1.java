import java.util.Scanner;

public class Soal1 {
    public static void main(String[] args) {
        String[] dataKey = {"dumb", "ways", "the", "best"};
        String word = "dumbways";

        Soal1 a = new Soal1();

        a.check(dataKey, word);


    }

    void check(String[] dataKey, String word) {

        for (int i=0; i<dataKey.length; i++){
            if (word.contains(dataKey[i])) {
                System.out.println(dataKey[i]+">>"+"true");
            } else {
                System.out.println(dataKey[i]+">>"+"false");
            }
        }

    }
}