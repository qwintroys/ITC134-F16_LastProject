<?php
//Mortgage Calculator Class
 
class MortgageCalculator {
   
    private $LoanAmount = 0;
    private $InterestRate = 0;
    private $LoanDuration = 0;
    
    
    //Get data from the form. Need to build the form later
    $LoanAmount = filter_input(INPUT_POST, "LoanAmount", FILTER_VALIDATE_FLOAT);
    $InterestRate = filter_input(INPUT_POST, "InterestRate", FILTER_VALIDATE_FLOAT);
    $LoanDuration = filter_input(INPUT_POST, "LoanDuration". FILTER_VALIDATE_INT);

    
    
    public function SetLoanAmount($Amount)
    {
        $this->LoanAmunt = $Amount;
    }
    
    public function SetInterestRate($Rate)
    {
        $this->InterestRate = ($Rate / 100);
    }
    
    public function SetLoanDuration($Years)
    {
        $this->LoanDuration = $Years;
    }
    
    
    public function CalculateInterestRate()
    {
        $Rate = $this->InterestRate /12;
        return $Rate;
    }
    
    
    private function NumberOfPayments()
    {
        $Months = $this->Years * 12;
        return $Months;
    }
    
    

    public function CalculatePayment()
    {
        $Payment = $Amount* (($Rate(1+$Rate)^$Months)/((1+$Rate)^$Months-1));
        return round($Payment,2);
    }

   
    
    echo 'Your mortgage monthly payment is: $'.$Payment;

}
