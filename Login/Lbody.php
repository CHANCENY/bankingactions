
<?php 

include 'Configurations/Validating.php';


 if(isset($_POST['loginsubmit']))
 {
    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
       $account = $_POST['username'];
       $password = $_POST['password'];

       $returns = logininguser($account,$password);

       if($returns === true)
       {
        $messages = 'please wait....';
        $_SESSION['status'] = true;
        echo '<META HTTP-EQUIV="Refresh" Content="3; URL=home.php">';
       // header('Location: home.php');
       }
       elseif($returns === false)
       {
        $messages = 'password is invalid!';
         $_SESSION['status'] = false;
        echo '<META HTTP-EQUIV="Refresh" Content="3; URL=logining.php">';
       }
       else
       {
        $messages = $returns;
         $_SESSION['status'] = false;
        echo '<META HTTP-EQUIV="Refresh" Content="3; URL=logining.php">';
       }
    }
    else
    {
        $messages = 'Fill in all fields!';
    }

 }

 if(isset($_POST['verifyusername']))
 {
    if(!empty($_POST['username']) && !empty($_POST['email']))
    {
        $username  = $_POST['username'];
        $email = $_POST['email'];
        $ok = verifyforgetpassworduser($username,$email);
        if($ok === true)
        {
            $_SESSION['verified'] = true;
            $messagebody = "please wait....";
            echo '<META HTTP-EQUIV="Refresh" Content="3; URL=newpassword.php">';
        }
        else
        {
            $messagebody = $ok;
        }

    }
    else
    {
        $messagebody = "Fill in all fields!";
    }
 }

 ?>



<section data-bs-version="5.1" class="form6 cid-t5a6bixYGe" id="form6-e">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>login</strong></h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="logining.php" method="POST" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name">
                    <div class="row">
                     <?php global $messages; if(!empty($messages)): echo '<div class="alert alert-success col-12">'.$messages.'</div>' ?? null; endif;?>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="username" placeholder="Account number" data-form-field="name" class="form-control" value="" id="name-form6-e">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group mb-3" data-for="email">
                            <input type="password" name="password" placeholder="Password" data-form-field="email" class="form-control" value="" id="email-form6-e">
                        </div>
                        <div class="col-auto mbr-section-btn align-center">
                            <button type="submit" name="loginsubmit" class="btn btn-primary display-4">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form2 cid-t5a8nEDFfr" id="form2-f">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="logining.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="row">
                   <?php global $messagebody; if(!empty($messagebody)): echo '<div class="alert alert-success col-12">'.$messagebody.'</div>' ?? null; endif;?>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 align-center mbr-fonts-style display-2"><strong>Forgot password</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-5 align-center display-7">Fill the form below to reset password.</p>
                        </div>
                        <div class="col-lg col-md col-12 form-group mb-3" data-for="email">
                            <input type="text" name="username" placeholder="Username" data-form-field="name" class="form-control" id="name-form2-f">
                        </div>
                        <div class="col-lg col-md col-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" id="email-form2-f">
                        </div>
                        <div class="mbr-section-btn col-md-auto col"><button type="submit" class="btn btn-warning display-4" name="verifyusername">Verify now!</button></div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>