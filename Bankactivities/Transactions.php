<?php 

include 'Bankactivities/Connection.php';
include 'Configurations/connections.php';


 class TransactionClass
 {
 	private $title;
 	private $password;
 	private $amount;
 	private $description;
 	private $con;
 	private $con2;


 	public function __construct()
 	{
 		$cons = new Connectionactivities();
 		$this->con = $cons->connecting();
 		$cons2 = new Connection();
 		$this->con2 = $cons2->connecting();
 	}

 	public function valifyingaccount($accountnumber,$password)
 	{
 		if(!empty($accountnumber) && !empty($password))
 		{
 			$pass = md5($password);
 			$query = "SELECT * FROM users WHERE accountnumber='$accountnumber'";
 			$result = mysqli_query($this->con2,$query);

 			if(mysqli_num_rows($result) > 0)
 			{
 				$details = mysqli_fetch_all($result,MYSQLI_ASSOC);
                $passwords = null;
                foreach ($details as $key) {
                    $passwords = $key['password'];
                }

                if($passwords === $pass)
                {
                    return true;
                }
                else
                {
                    return false;
                }
 			}
 			else
 			{
 				return 'Something went wrong!';
 			}


 		}
 		else
 		{
 			return 'Something went worng!';
 		}
 	}

    public function depositing($title,$account,$desc,$amount)
    {
        $query = "SELECT * FROM cash_book WHERE accountnumber='$account';";
        $res = mysqli_query($this->con, $query);
        $book = mysqli_fetch_all($res,MYSQLI_ASSOC);
        $balance = null;
        $id = null;
        foreach ($book as $key) {
          $balance = $key['accountamount'];
          $id = $key['ID'];  
        }

        if(!empty($balance))
        {
         $numberbalance = floatval($balance); 
         $amountnumber = floatval($amount);
         $totaldeposited = $numberbalance + $amountnumber;
         if($totaldeposited > $numberbalance)
         {
            $stringbalance = strval($totaldeposited);
            $query3 = "UPDATE `cash_book` SET `accountamount` = '$stringbalance' WHERE `cash_book`.`ID` = $id";
            if(mysqli_query($this->con,$query3))
            {
                $ref = null;
                for ($i=0; $i <5 ; $i++) { 
                    $ref3 = rand(100,900);
                    $rf = strval($ref3);
                    $ref = $ref.$rf;
                }
              // statement making here ....
                $query7 = "INSERT INTO statements_correction (account,transaction_title,transaction_description,amount,balance,type,reference) VALUES ('$account','$title','$desc','$amount','$stringbalance','deposit','$ref')";
                if(mysqli_query($this->con,$query7))
                {
                    return true;
                }
                else
                {
                    return "Statement not made transaction succesful.";
                }
            }
            else
            {
                return 'Sorry server is offline!';
            }
         }  
         else
         {
            return 'Depositing failed!';
         }
        }
        else
        {
            return 'Something went wrong!';
        }

        
    }

    public function withdrawing($account,$amount,$title,$desc)
    {
        $query = "SELECT * FROM cash_book WHERE accountnumber='$account';";
        $res = mysqli_query($this->con, $query);
        $book = mysqli_fetch_all($res,MYSQLI_ASSOC);
        if(!empty($book))
        {
            $balance = null;
            $id = null;
          foreach ($book as $key) {
             $balance = $key['accountamount'];
             $id = $key['ID'];  
           }

           $numberbalance = floatval($balance); 
           $amountnumber = floatval($amount);

           if($amountnumber > 50000)
           {
              return 'Amount has exceed limit!';
           }
           else
           {
              $types = gettype($amountnumber);
              
              if($types === 'double')
              {
                if($numberbalance < 10)
                {
                    return 'You have insufficient funds';
                }
                else
                {
                    if($amountnumber >= $numberbalance)
                    {
                        return 'You have insufficient funds';
                    }
                    else
                    {
                      if($_SESSION['type'] === "Fixed deposit")
                      {
                        return 'Account type you cant make this transaction';
                      }
                      else
                      {
                        $totalbalance = $numberbalance - $amountnumber;
                        $stringbalance = strval($totalbalance);
                        $query3 = "UPDATE `cash_book` SET `accountamount` = '$stringbalance' WHERE `cash_book`.`ID` = $id";
                        if(mysqli_query($this->con,$query3))
                         {
                           $ref = null;
                           for ($i=0; $i <5 ; $i++) { 
                              $ref3 = rand(100,900);
                               $rf = strval($ref3);
                              $ref = $ref.$rf;
                            }
                           $query7 = "INSERT INTO statements_correction (account,transaction_title,transaction_description,amount,balance,type,reference) VALUES ('$account','$title','$desc','$amount','$stringbalance','withdraw','$ref')";
                           if(mysqli_query($this->con,$query7))
                            {
                               return true;
                            }
                            else
                            {
                               return 'Statement failed withdrawing done succesfully';
                            }

                          }
                          else
                          {
                          return 'withdrawing failed!';
                          }
                        }
                    }
                }

              }
              else
              {
                return 'Please enter correct amount!';
              }
           }


           
        }
        else
        {
            return 'Something went wrong try to log out!';
        }

    }

    public function checkbalance($account,$password)
    {
      $token =$this->valifyingaccount($account,$password);
      if($token === true)
      {
        $query = "SELECT * FROM cash_book WHERE accountnumber=$account";
        $res = mysqli_query($this->con,$query);
        $details = mysqli_fetch_all($res,MYSQLI_ASSOC);
        if(!empty($details))
        {
            $amount = null;
            foreach ($details as $key) {
                $amount = $key['accountamount'];
            }

            return $amount;

        }
        else
        {
            return false;
        }

      }
      else
      {
        return false;
      } 
    }

    public function transferingmoney($toaccount,$account,$password,$amount,$desc)
    {
         $query = "SELECT * FROM cash_book WHERE accountnumber='$account';";
         $res = mysqli_query($this->con, $query);
         $book = mysqli_fetch_all($res,MYSQLI_ASSOC);
         if(!empty($book))
        {
            $balance = null;
            $id = null;
          foreach ($book as $key) {
             $balance = $key['accountamount'];
             $id = $key['ID'];  
           }

           $numberbalance = floatval($balance); 
           $amountnumber = floatval($amount);

           if($_SESSION['type'] ==="Fixed deposit")
           {
            return 'Account type you cant make this transaction!';
           }
           else
           {
             if($numberbalance <= $amountnumber)
             {
                return 'You have insufficient funds';
             }
             else
             {

                if($amountnumber > 100000)
                {
                   return 'Amount has exceed limit!';
                }
                else
                {
                   $types = gettype($amountnumber);
              
                   if($types === 'double')
                   {
                     if($numberbalance < 10)
                     {
                      return 'You have insufficient funds';
                     }
                   else
                   {
                    $totalbalance = $numberbalance - $amountnumber;
                    $stringbalance = strval($totalbalance);

                    $query3 = "UPDATE `cash_book` SET `accountamount` = '$stringbalance' WHERE `cash_book`.`ID` = $id";
                    if(mysqli_query($this->con,$query3))
                    {
                        $ref = null;
                        for ($i=0; $i <5 ; $i++) { 
                            $ref3 = rand(100,900);
                            $rf = strval($ref3);
                            $ref = $ref.$rf;
                        }
                        $titles ="To:".$toaccount;
                        $query7 = "INSERT INTO statements_correction (account,transaction_title,transaction_description,amount,balance,type,reference) VALUES ('$account','$titles','$desc','$amount','$stringbalance','transfer','$ref')";
                        if(mysqli_query($this->con,$query7))
                        {
                            $title ='From:'.$account;
                            $returns = $this->sendingmoney($toaccount,$account,$amount,$ref,$desc,$title);
                            return $returns;
                        }
                        else
                        {
                            return 'Done if transfer failed but money reduce contact bank.';
                        }

                    }
                    else
                    {
                        return 'withdrawing failed!';
                    }
                }

              }
              else
              {
                return 'Please enter correct amount!';
              }
          }
        }
       }


           
        }
        else
        {
            return 'Something went wrong try to log out!';
        }
    }

    public function sendingmoney($toaccount,$account,$amount,$ref,$desc,$title)
    {
         $query = "SELECT * FROM cash_book WHERE accountnumber='$toaccount';";
         $res = mysqli_query($this->con, $query);
         $book = mysqli_fetch_all($res,MYSQLI_ASSOC);
         if(!empty($book))
         {
            $balance = null;
            $id = null;
          foreach ($book as $key) {
             $balance = $key['accountamount'];
             $id = $key['ID'];  
           }

           $numberbalance = floatval($balance); 
           $amountnumber = floatval($amount);

           $types = gettype($amountnumber);
              
              if($types === 'double')
              {
                $newbalance = $numberbalance + $amountnumber;
                $stringbalance = strval($newbalance);
                $query3 = "UPDATE `cash_book` SET `accountamount` = '$stringbalance' WHERE `cash_book`.`ID` = $id";
                if(mysqli_query($this->con,$query3))
                {
                    
                    $query7 = "INSERT INTO statements_correction (account,transaction_title,transaction_description,amount,balance,type,reference) VALUES ('$toaccount','$title','$desc','$amount','$stringbalance','Trans:income','$ref')";
                    if(mysqli_query($this->con,$query7))
                    {
                        return true;
                    }
                    else
                    {
                        return 'Statement failed!';
                    }
                   
                }
                else
                {
                    return 'Transfer Failed!';
                }
              }
              else
              {
                return ' Invalid amount';
              }
            
         }
         else
         {
            return 'Reciever account is invalid!';
         }

        
    }

    public function statementgathering($account,$password)
    {
       $token =$this->valifyingaccount($account,$password);
       if($token === true)
       {
         $query ="SELECT * FROM statements_correction WHERE account='$account'";
         $res = mysqli_query($this->con,$query);
         $st = mysqli_fetch_all($res,MYSQLI_ASSOC);
         return $st;
       }
       else
       {
        return null;
       } 
    }
 }

 ?>