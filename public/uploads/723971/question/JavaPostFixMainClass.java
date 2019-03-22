/**
 * @(#)JavaPostFixMainClass.java
 *
 *
 * @author 
 * @version 1.00 2018/10/5
 */

public class JavaPostFixMainClass {       
      
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here  


	JavaPostFix postfix = new JavaPostFix();
	
	String data = "8" , data1= "1", data2 ="2", data3 ="4", data4 = "5", data5 = "3";
	
	String string = data1+ " " + data + " + " + data3 + " * " + data4 + " - "; 
		
	//	data1 data * data3 * data1 – / data4 data5* +
		
	String string1 = data1 + " " + data + " * " + data3 + " " + data1 + " - / " + data4 + " " + data5  + " * + "; 
		
	System.out.println("PostFix Evaluation is as shown below ");
	
	System.out.println("---------------------------------------------------------------- ");
	
	
	System.out.println("1. Data1 data + data3 * data4 –: " + postfix.PostFixEvaluation(string));
	
	System.out.println("2. Data1 data * data3 * data1 – / data4 data5* + : " + postfix.PostFixEvaluation(string1));

    }
}
