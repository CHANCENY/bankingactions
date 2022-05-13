<?php 
include 'Bankactivities/Transactions.php';

 $deposit = new TransactionClass();

 if(isset($_POST['depositsubmit']))
 {
    $account = $_SESSION['number'];

   
    $password =$_POST['password'];
    $returns = $deposit->valifyingaccount($account,$password);
    if($returns === true)
    {
        if(!empty($_POST['textarea']) && !empty($_POST['title']) && !empty($_POST['amount']))
        {
            $title = $_POST['title'];
            $desc = $_POST['textarea'];
            $amount = $_POST['amount'];
            $account = $_SESSION['number'];
            $emails = $_SESSION['email'];
           $returning = $deposit->depositing($title,$account,$desc,$amount);
           if($returning === true)
           {
            $email->transsactionreport($title,$desc,$account,$amount,'Depositing',$emails);
             $runs = $email->emailing();
            $message = 'Depositing done successfully';
           }
           else
           {
            $message = $returning;
           }
          
        }
        else
        {
            $message ='Please fill in all fields!';
        }
      
    }
    elseif($returns === false)
    {
        $message = 'Password is invalid!';
    }
    else
    {
        $message =$returns;
    }
 }

 ?>




<section data-bs-version="5.1" class="form5 cid-t5aDY0sunN" id="form5-c">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Deposit money</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="depositing.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="row">
                        <?php if(!empty($message)): echo '<div class="alert alert-success col-12">'.$message.'</div>' ?? null; endif;?>
                        
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="title" placeholder="Transaction title" data-form-field="name" class="form-control" value="" id="name-form5-c">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="password" name="password" placeholder="Password" data-form-field="email" class="form-control" value="" id="email-form5-c">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="url">
                            <input type="text" name="amount" placeholder="Amount" data-form-field="url" class="form-control" value="" id="url-form5-c">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="textarea" placeholder="Transaction description" data-form-field="textarea" class="form-control" id="textarea-form5-c"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-primary display-4" name="depositsubmit">Deposit now</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>