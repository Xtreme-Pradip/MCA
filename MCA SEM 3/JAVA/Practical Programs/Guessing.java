public class Guessing {
    public static void main(String args[])
    throws java.io.IOException{

        char ch;
        char ignore;
        char answer = 'K';
        do{
            System.out.println("I'm thinking of a letter between A and Z.");
            System.out.println("Can you Guess it : ");

            // read a character
            ch = (char) System.in.read();

            // discard any other characters in the input buffer
            do{
                ignore = (char) System.in.read();
            }while(ignore != '\n');

            if(ch == answer)
                System.out.println("**** Right ****");
            else{
                System.out.print("... Sorry, You're ");
                if(ch < answer) System.out.print("too low");
                else System.out.print("too high");
                System.out.print(" Try again! \n");
            }
        }while(answer != ch);
    }
}
