import java.util.Scanner;

public class Soal4 {
    public static void main(String args[]) {

        
        int jam_pertama = 2000;
       
        int maksimal = 10000;
        int pertama = jam_pertama * 3 ;
        int total ;
        int nilai;
        int a;
        
        Scanner input = new Scanner(System.in);
        System.out.print("total jam: ");
        nilai = input.nextInt();
      
      total = pertama + 1000 *(nilai-3);
  
        if(nilai <= 3){
            System.out.println("Biaya ="+jam_pertama  *nilai);
        }else if(nilai < 7){
            System.out.println("Biaya ="+total);
        }else{    
            System.out.println("Biaya Parkir="+maksimal );
        }
    }

}