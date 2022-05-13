<?php
 session_start();
 include 'Bankactivities/Loader.php';
 //$_SESSION['verified'];
 
 $load = new LoadFeatures();
 $load->bankinfo();
 $_SESSION['logo'] = $load->getlogo();
 $_SESSION['bankname'] = $load->getbankname();
 $_SESSION['moto'] = $load->getbankmoto();
 $_SESSION['displayimage'] = $load->getdisplayimage();

 $_SESSION['facebook'] = $load->getfacebook();
 $_SESSION['tweet'] = $load->gettweet();
 $_SESSION['youtube'] = $load->getyoutube();
 $_SESSION['instagram'] = $load->getinstagram();
 $_SESSION['background'] = $load->getbackgroundimage();

 $load2  = new LoadFeatures();
  

 
 $load2->loadinglatestnews();
 $_SESSION['latest'] = $load2->getlatestnews();
 $load2->newsfetching();
 $_SESSION['news'] = $load2->getnews();
 
 
 ?>


<!DOCTYPE html>
<html  >
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.5, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Home">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo 'data:image;base64,'.base64_encode($_SESSION['logo']); ?>" type="image/x-icon">
  <meta name="description" content="">


  <title><?php if(!empty($_SESSION['bankname'])): echo $_SESSION['bankname']; endif; ?></title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">




</head>
<body>

  <section data-bs-version="5.1" class="menu menu1 cid-t5a31DWMMj" once="menu" id="menu1-5">


    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">

          <?php if($_SESSION['status']=== true): ?>

            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="home.php"><?php if(!empty($_SESSION['bankname'])): echo $_SESSION['bankname']; endif; ?></a></span>
            </div>

          <?php else: ?>


            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="index.php"><?php if(!empty($_SESSION['bankname'])): echo $_SESSION['bankname']; endif; ?></a></span>
            </div>

              <?php endif; ?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
           <?php if($_SESSION['status'] === true): ?>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="logout.php">Log out</a>
                 </li><li class="nav-item"><a class="nav-link link text-black display-4" href="account.php"><?php echo $_SESSION['user']; ?></a></li></ul>

             </div>

           <?php else: ?>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="registration.php">Register now</a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="logining.php">Log in</a></li></ul>


            </div>
          <?php endif; ?>
        </div>
    </nav>
</section>
