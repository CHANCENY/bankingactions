
<?php  if($_SESSION['status'] === true): ?>


<section data-bs-version="5.1" class="team2 cid-t5acmh6chM" xmlns="http://www.w3.org/1999/html" id="team2-n">
    
    
    <div class="container">
        <div class="card">
            <div class="card-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4">
                        <div class="image-wrapper">
                         <img src="<?php echo 'data:image;base64,'.base64_encode($_SESSION['profile']); ?>" alt="no profile">
                        </div>
                    </div>
                    <div class="col-12 col-md">
                        <div class="card-box">
                            <h5 class="card-title mbr-fonts-style m-0 mb-3 display-5">
                                <strong><?php echo  $_SESSION['user']; ?></strong>
                            </h5>
                            <h6 class="card-subtitle mbr-fonts-style mb-3 display-4">
                                <strong>Account type</strong><p class="mbr-text mbr-fonts-style display-7">
                                <?php echo $_SESSION['type']; ?>
                            </p>
                            </h6>
                             <h6 class="card-subtitle mbr-fonts-style mb-3 display-4">
                                <strong>Account number</strong>
                                <p class="mbr-text mbr-fonts-style display-7">
                                <?php echo $_SESSION['number']; ?>
                            </p>
                            </h6>
                             <h6 class="card-subtitle mbr-fonts-style mb-3 display-4">
                                <strong>Account email</strong>
                                <p class="mbr-text mbr-fonts-style display-7">
                                <?php echo $_SESSION['email']; ?>
                            </p>
                            </h6>
                             <h6 class="card-subtitle mbr-fonts-style mb-3 display-4">
                                <strong>Account username</strong>
                                <p class="mbr-text mbr-fonts-style display-7">
                                <?php echo $_SESSION['username']; ?>
                            </p>
                            </h6>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</section>
<div><br><br></div>



<section data-bs-version="5.1" class="contacts3 map1 cid-t5afQryLUY" id="contacts3-s">

    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Personal contacts</strong>
            </h3>
            <h4 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">account contacts available</h4>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="card col-12 col-md-6">
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Phone</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="tel:<?php echo $_SESSION['phone']; ?>" class="text-primary"><?php echo $_SESSION['phone']; ?></a>
                        </p>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="image-wrapper">
                        <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                    </div>
                    <div class="text-wrapper">
                        <h6 class="card-title mbr-fonts-style mb-1 display-5">
                            <strong>Email</strong>
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <a href="mailto:<?php echo $_SESSION['email']; ?>" class="text-primary"><?php echo $_SESSION['email']; ?></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="map-wrapper col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCNveGQ9bfpKFwWzQLLftrR9hNiHwdqQG8&amp;q=<?php echo $_SESSION['address']; ?>" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/2757187" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7"></p><a style="z-index:1" href="https://mobirise.com/web-page-maker.html"></a></section>
   

<?php else: ?>
  
  <?php header('Location: logining.php'); ?>

<?php endif; ?>
  
  