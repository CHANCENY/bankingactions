

<section data-bs-version="5.1" class="header11 cid-t5a38Zw0iI" id="header11-6" style="background-image: url('<?php if(!empty($_SESSION['displayimage'])): echo 'data:image;base64,'.base64_encode($_SESSION['background']); endif; ?>');">





    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 image-wrapper">
                <img class="w-100" src="<?php if(!empty($_SESSION['displayimage'])): echo 'data:image;base64,'.base64_encode($_SESSION['displayimage']); endif; ?>" alt="motivate image">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1">
                        <strong><?php if(!empty($_SESSION['bankname'])): echo $_SESSION['bankname']; endif; ?></strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                       <?php if(!empty($_SESSION['moto'])): echo $_SESSION['moto']; endif; ?></p>

                        <?php if($_SESSION['status'] === true): ?>
                          <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-7" href="home.php">Get started!</a>
                          </div>

                        <?php else: ?>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-7" href="logining.php">login account</a>
                    </div>

                  <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="form2 cid-t5a3Rme40D" id="form2-8">




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="registration.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="row">
                        
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 align-center mbr-fonts-style display-2">
                                <strong>Register account now!</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-5 align-center display-7">Fill the form below to get started.</p>
                        </div>
                        <div class="col-lg col-md col-12 form-group mb-3" data-for="email">
                            <input type="text" name="username" placeholder="Username" data-form-field="name" class="form-control" id="name-form2-8">
                        </div>
                        <div class="col-lg col-md col-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" id="email-form2-8">
                        </div>
                        <div class="mbr-section-btn col-md-auto col">
                            <button type="submit" name="submitstart" class="btn btn-warning display-4">Start Now!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
