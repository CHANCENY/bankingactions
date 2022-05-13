<?php   

 include 'Bankactivities/Transactions.php';

 $deposit = new TransactionClass();

  $account = $_SESSION['number'];
  $password =$_SESSION['password'];
  //echo $account . $password;
 $res = $deposit->checkbalance($_SESSION['number'],$_SESSION['password']);

 if($res === false)
 {
    $balances = "No balance";
 }
 else
 {
    $balances = $res;
 }

 ?>



<section data-bs-version="5.1" class="team2 cid-t5aGINxBGX" xmlns="http://www.w3.org/1999/html" id="team2-m">
    
    
    <div class="container">
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="image-wrapper">
                            <img src="<?php echo 'data:image;base64,'.base64_encode($_SESSION['profile']); ?>" alt="profile">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <h5 class="card-title mbr-fonts-style m-0 mb-3 display-5">
                                <strong><?php echo $_SESSION['user']; ?></strong>
                            </h5>
                            <h6 class="card-subtitle mbr-fonts-style mb-3 display-4"><strong>Account type: <?php echo $_SESSION['type']; ?></strong></h6>
                            <p class="mbr-text mbr-fonts-style display-7">Balance: $ <?php echo $balances; ?></p>
                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <form action="statementing.php" method="GET">
                                        <input type="submit" name="statement" value="View statements" class="btn btn-secondary display-7">
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</section>