package task_one.self_learn;

public class indexx {

     public static void main(String[] args) {


        int result = sum2(10);
        System.out.println(result);

        
}
public static int sum2(int k)
{
if (k > 0) {
return k + sum2(k - 1);
} else {
return 0;
}
}
}
////////////////////////////////////////////////////////////////////////
// number__2___switch