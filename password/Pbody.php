<?php 
 include 'Configurations/Validating.php';

 if(isset($_POST['change']))
 {
    if(!empty($_POST['password']) && !empty($_POST['password1']))
    {
       $newpassword = $_POST['password'];
       $confirmpassword = $_POST['password1'];

       if($newpassword === $confirmpassword)
       {
          $change = changepassword($newpassword);
          if($change === true)
          {
            $messages ="please wait....";
            sleep(2);
            $messages ="Password changed redirecting...";

            echo '<META HTTP-EQUIV="Refresh" Content="3; URL=logining.php">';

          }
          else
          {
            $messages = $change;
          }
       }
       else
       {
         $messages = "Passwords dont match!";
       }
    }
    else
    {
        $messages = "Fill in all fields";
    }
 }




 ?>




<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.6.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.5, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="newpassword">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets3/images/15276.jpg" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>newpassword</title>
  <link rel="stylesheet" href="assets3/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets3/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets3/dropdown/css/style.css">
  <link rel="stylesheet" href="assets3/socicon/css/styles.css">
  <link rel="stylesheet" href="assets3/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets3/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets3/mobirise/css/mbr-additional.css" type="text/css">
  
</head>
<body>

<section data-bs-version="5.1" class="form2 cid-t5rq4VB4n5" id="form2-v">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="newpassword.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="row">
                       <?php global $messages; if(!empty($messages)): echo '<div class="alert alert-success col-12">'.$messages.'</div>' ?? null; endif;?>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-5 align-center display-7">Fill form to set new password.</p>
                        </div>
                        <div class="col-lg col-md col-12 form-group mb-3" data-for="email">
                            <input type="password" name="password" placeholder="New password" data-form-field="name" class="form-control" id="name-form2-v">
                        </div>
                        <div class="col-lg col-md col-12 form-group mb-3" data-for="email">
                            <input type="password" name="password1" placeholder="Confirm password" data-form-field="email" class="form-control" id="email-form2-v">
                        </div>
                        <div class="mbr-section-btn col-md-auto col"><button type="submit" class="btn btn-warning display-4" name="change">Change!</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
