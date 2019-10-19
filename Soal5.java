import java.util.Scanner;

public class Soal5 {
    public static void main(String args[]) {
     
     Scanner input = new Scanner (System.in);
        String nama , nim ;
        char grade ;
        final double nilai_kehadiran, nilai_tugas , nilai_uts  , nilai_uas , nilai_akhir;
        System.out.println("===== Menghitung Nilai Mahasiswa=====\n");
        System.out.print("Masukan nama : ");
        nama = input.nextLine();
        System.out.print("Masukan NIM : ");
        nim = input.nextLine();
        System.out.print("Jumlah Kehadiran : ");
        nilai_kehadiran = input.nextInt();
        System.out.print("Tugas  : ");
        nilai_tugas = input.nextInt();
        System.out.print("Nilai UTS : ");
        nilai_uts = input.nextInt();
        System.out.print("Nilai UAS : ");
        nilai_uas = input.nextInt();
        
        nilai_akhir = (0.10 * nilai_kehadiran + 0.20 * nilai_tugas + 0.30 * nilai_uts + 0.40 * nilai_uas);
        if (nilai_akhir >= 80 && nilai_akhir <=100){
            grade = 'A';
        }
        else if (nilai_akhir >= 71 && nilai_akhir < 79){
            grade = 'B';
        }
        else if (nilai_akhir >= 61 && nilai_akhir <= 70){
            grade = 'C';
        }
        else if (nilai_akhir > 50 && nilai_akhir <= 60){
            grade = 'D';
        }
        else {
            grade = 'E';
        }
        if (nilai_kehadiran == 0 || nilai_tugas == 0 || nilai_uts == 0 || nilai_uas==0){
            System.out.print("nilai : " + (grade='E'));
        }
        else {
           System.out.print("nilai :" + grade);
        }  
        
        
    }

}