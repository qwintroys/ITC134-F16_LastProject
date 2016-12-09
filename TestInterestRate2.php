<? php
/*the basic formula for finding the monthly payment of a mortgage is as follows:
          r(1+r) ^n
 M = P ----------------   
        [(1+r) ^n] -1

where M = Monthly Payment; P = Principle; r = rate; n = number of payments.

Additionally "^n" means "raised to the power of n" kind of like 2^3 = 2 * 2 * 2 = 8
so we need to GET the Principle (LoanAmount) from a user, GET the number of months (entered as a year - LoanDuration) from the user, 
and also the Rate (InterestRate). I've factored in the need to change the duration given in a year number to months (30 yrs*12 months = 360 months) 
as well as needing to change the Interest Rate to a decimal (eg. 3.5% * 100 = 0.0035)
I hope I've commented this enough that you can easily write the code and correct any errors in my tests.
*/

require_once('MortgageCalculator.php')

class mortgageTest extends PHPUnit_Framework_TestCase

{
  public function setup(){}
  public function tearDown()[]
  
  public function LoanAmountTest() {
    
      public function testLoanAmountIsValid() {
        $LoanAmount = new LoanAmount();
        $beginning(int); //int=number entered by user
        $this->asstertEquals(acc.principle, int); //acc.start = basic loan amount; Principle(P)
  }
}


  public function LoanDuration() {
  {
      $LoanDuration acc=Time();
      $months(y_int); //y_nt = number years entered by user
      $this->assertEquals(duration, n_int); //acc.duration = number of months of loan (eg 30 y = 12*30 = 360 months);number of payments(n)
  }
}


  public class InterestRate() {
 {
      $InterestRate=Rate();
      $percent(i_int); //i_int = interest rate entered by user
      $this->assertEquals(prate, r_int)// prate=interest rate of the loan in decimal form (i.e. 3.5% is 0.0035); rate of loan(r)
      }
    }
    
    
    
      
//??This part I'm not sure how to write, so I may be way way off base

//calculation to run:

//          r(1+r) **n
// M = P ----------------   M = Monthly Payment; P = Principle; r = rate; n = number of payments
//        [(1+r) **n] -1


  public class Mortgagecalc(){
  {
      $prate * [(1 + acc.prate)]**acc.duration
      $this->assertEquals(prate, r_int)          
      }
    }
}
      
?>
