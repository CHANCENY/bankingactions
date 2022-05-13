<?php 
   
   


   if(isset($_POST['complainsubmit']))
   {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['textarea']))
    {
       $name = $_POST['name'];
       $email =strval($_POST['email']);
       $subject =$_POST['subject'];
       $message = $_POST['textarea'];

       $email = new SenderEmail();
       $email->complaining($email,$name,$subject,$message);
       $runs = $email->emailing();
       $messages = $runs;
    }
    else
    {
        $messages = 'Fill in all fields!';
    }
   }

 ?>





<section data-bs-version="5.1" class="header12 cid-t5az5Nprz6 mbr-parallax-background"
  id="header12-2" style="background-image: url('<?php echo 'data:image;base64,'.base64_encode($_SESSION['profile']); ?>'); padding-top: 5rem; padding-bottom: 5rem;">

  <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-12 col-lg-9">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <h1 class="card-title mbr-fonts-style mb-3 display-1"><strong>PNB BANK</strong></h1>
                        <p class="mbr-text mbr-fonts-style display-7">Pnb bank will help you to keep track of all of your transactions and provide<br>security to your transaction records&nbsp;</p>
                        <div class="mbr-section-btn mt-3"><a class="btn btn-secondary-outline display-4" href="account.php">View account &gt;</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form5 cid-t5aznWD8Uj" id="form5-3">


    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Complain</strong></h3>

        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="home.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="row">
                       <?php global $messages; if(!empty($messages)): echo '<div class="alert alert-success col-12">'.$messages.'</div>' ?? null; endif;?>

                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-3">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-3">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="url">
                            <input type="text" name="subject" placeholder="Subject" data-form-field="url" class="form-control" value="" id="url-form5-3">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form5-3"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                            <button type="submit" class="btn btn-primary display-4" name="complainsubmit">Send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="contacts4 cid-t5aztAU6Bo" id="contacts4-4">





    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="text-content col-12 col-md-6">
                <h2 class="mbr-section-title mbr-fonts-style display-2">
                    <strong>Follow Us</strong>
                </h2>
                <p class="mbr-text mbr-fonts-style display-7"></p>
            </div>
            <div class="icons d-flex align-items-center col-12 col-md-6 justify-content-end mt-md-0 mt-2 flex-wrap">
                <a href="https://<?php if(!empty($_SESSION['tweet'])): echo $_SESSION['tweet']; endif; ?>" target="_blank">
                    <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="https://<?php if(!empty($_SESSION['facebook'])): echo $_SESSION['facebook']; endif; ?>" target="_blank">
                    <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="https://<?php if(!empty($_SESSION['youtube'])): echo $_SESSION['youtube']; endif; ?>" target="_blank">
                    <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="https://<?php if(!empty($_SESSION['instagram'])): echo $_SESSION['instagram']; endif; ?>" target="_blank">
                    <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>






            </div>
        </div>
    </div>

</section>

<section data-bs-version="5.1" class="timeline2 cid-t5azBrTaGj" id="timeline2-5">




    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Bank news</strong></h3>

        </div>

    <?php if(!empty($_SESSION['latest'])): ?>

        <?php foreach ($_SESSION['latest']  as $key): ?>
           
            <div class="timelines-container mt-4">
            <div class="row timeline-element separline mb-5">
                <div class="timeline-date-panel col-12 col-md-4">
                    <div class="time-line-date-content">
                        <h4 class="mbr-timeline-date mbr-fonts-style display-5">
                            <strong><?php echo $key['Date']; ?></strong>
                        </h4>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-12 col-md-8">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title mb-4 mbr-fonts-style display-5">
                            <strong><?php echo $key['title']; ?></strong>
                        </h4>
                        <div class="image-wrapper mb-4">
                            <img src="<?php echo 'data:image;base64,'.base64_encode($key['image']); ?>" alt="Mobirise Website Builder" title="">
                        </div>
                        <div>
                        <p class="mbr-text mbr-fonts-style display-7">
                          <?php echo $key['newsbody']; ?>
                        </p>
                    </div>

                </div>
            </div>
           </div>
        <?php endforeach; ?>
        <form action="allnews.php" method="GET">
          <button type="submit" name="allnews" class="btn btn-primary display-4">All news</button>
      </form>
    <?php else: ?>

       
       <p class="mbr-text mbr-fonts-style display-7" style="text-align: center;">
                          No news available.
                        </p>


    <?php endif; ?>

      </div>
      

      

</section>
