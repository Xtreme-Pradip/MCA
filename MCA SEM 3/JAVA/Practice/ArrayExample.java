import java.util.Arrays;
public class ArrayExample {
    public static void main(String[] args) {
        int arr[]=new int [5];
        
        for(int i=5;i>0;i--)
            arr[5-i] = i;
        
        Arrays.sort(arr);
        
        for(int i=0;i<5;++i)
            System.out.print(arr[i]);
    }
}
