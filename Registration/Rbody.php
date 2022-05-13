<?php 

include 'Configurations/Validating.php';

 if(isset($_POST['regsubmit']))
 {
    if(!empty($_FILES['upload']['name']))
    {
      $format = array('jpg','jpeg','png');
      $image = $_FILES['upload'];
      $imagename = $image['name'];
      //$imagetemp = $image['tmp_name'];
      $imagesize = $image['size'];

      $image_ext = explode('.', $imagename);
      $ext = strtolower(end($image_ext));

      if(in_array($ext, $format))
      {
        if($imagesize <= 2000000)
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
           
           
        

            if($password2 === $password)
            {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    if(empty($firstname) && empty($lastname) && empty($username) && empty($address) && empty($phone))
                     {
                        $message = 'Please fill in all fields';

                     }
                     else
                     {
                       if(!empty($_POST['accounts1']))
                       {
                           $accounttype= $_POST['accounts1'];
                           $image = addslashes(file_get_contents($_FILES['upload']['tmp_name']));
                           $message = Registration($firstname,$lastname,$username,$email,$password,$image,$accounttype,$address,$phone);
                       }
                       elseif (!empty($_POST['accounts2'])) {
                           $accounttype=  $_POST['accounts2'];
                           $image = addslashes(file_get_contents($_FILES['upload']['tmp_name']));
                           $message = Registration($firstname,$lastname,$username,$email,$password,$image,$accounttype,$address,$phone);
                       }
                       elseif (!empty($_POST['accounts3'])) {
                            $accounttype=  $_POST['accounts3'];
                            $image = addslashes(file_get_contents($_FILES['upload']['tmp_name']));
                           $message = Registration($firstname,$lastname,$username,$email,$password,$image,$accounttype,$address,$phone);
                       }
                       else
                       {
                        $message = 'Please select account type.';
                       }
                     }
                }
                else
                {
                    $message = 'Email is invalid!';
                }
                
            }
            else
            {
                $message ='Passwords dont match!';
            }
       }
        else
        {
            $message = 'File size exceed limit 2mb.';
        }

      }
      else
      {
        $message = 'Allowed only png, jpg, jpeg';
      }

    }
    else
    {
       $message ="Profile not uploaded!";
    }
 }


 if(isset($_POST['submitstart']))
 {
    $username = $_POST['username'];
    $email=$_POST['email'];
 }


 ?>



<section data-bs-version="5.1" class="form4 cid-t5aaqqyHlD mbr-fullscreen" id="form4-l">

    <div class="container">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-3 offset-lg-1 mbr-form" data-form-type="formoid">
                <form action="registration.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name" enctype="multipart/form-data">
                    <div class="row">   
                      </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2"><strong>Sign up&nbsp;</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">
                                Fill this form to create account with us.</p>
                        </div>
                         <div>
                           <?php global $message; if(!empty($message)): echo '<div class="alert alert-success col-12">'.$message.'</div>' ?? null; endif;?>
                        </div> 
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="name">
                            <input type="text" name="firstname" placeholder="First name" data-form-field="name" class="form-control" value="" id="name-form4-l">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input type="text" name="lastname" placeholder="Last name" data-form-field="email" class="form-control" value="" id="email-form4-l">
                        </div>
                        <?php if(!empty($username) && !empty($email)): ?>

                        <input type="hidden" name="email" placeholder="Email" data-form-field="email" class="form-control" value="<?php echo $email ?? null; ?>" id="email-form4-l">
                        <input type="hidden" name="username" placeholder="User name" data-form-field="email" class="form-control" value="<?php echo $username ?? null; ?>" id="email-form4-l">
                    <?php else: ?>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input type="text" name="username" placeholder="User name" data-form-field="email" class="form-control" value="" id="email-form4-l">
                        </div>
                         <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-form4-l">
                        </div>
                    <?php endif; ?>
                         <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                             <label >Profile</label>
                            <input type="file" name="upload" placeholder="image" data-form-field="email" class="form-control" value="" id="email-form4-l">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input type="text" name="address" placeholder="Address" data-form-field="email" class="form-control" value="" id="email-form4-l">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input type="tel" name="phone" placeholder="Phone" data-form-field="email" class="form-control" value="" id="email-form4-l">
                        </div>
                         <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input type="password" name="password" placeholder="Password" data-form-field="email" class="form-control" value="" id="email-form4-l">
                        </div>
                         <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <input type="password" name="password2" placeholder="Confirm password" data-form-field="email" class="form-control" value="" id="email-form4-l">
                        </div>

                         <div class="col-lg-12 col-md col-12 form-group mb-3" data-for="email">
                            <label >Account type.</label><br>
                            <input type="radio" id="" name="accounts1" value="Saving">
                            <label for="html" >Saving account</label><br>
                             <input type="radio" id="" name="accounts2" value="Current">
                            <label for="html" >Current account</label><br>
                             <input type="radio" id="" name="accounts3" value="Fixed deposit">
                            <label for="html" >Fixed deposit account</label><br>
                        </div>
                        <div class="col-12 col-md-auto mbr-section-btn">
                            <button type="submit" name="regsubmit" class="btn btn-secondary display-4">Submit</button>
                        </div>
                         
                    </div>
                </form>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="<?php echo 'data:image;base64,'.base64_encode($_SESSION['displayimage']); ?>" alt="Mobirise Website Builder">
                </div>
            </div>
        </div>
    </div>
</section>