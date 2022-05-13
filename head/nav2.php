<?php 
 session_start();
include 'messages/EmailSenderClass.php';

 $email = new SenderEmail();
 

 $_SESSION['background'] ='3d-wallpaper-of-flowers-high-definition-4.jpg';


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
  <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets2/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets2/parallax/jarallax.css">
  <link rel="stylesheet" href="assets2/dropdown/css/style.css">
  <link rel="stylesheet" href="assets2/socicon/css/styles.css">
  <link rel="stylesheet" href="assets2/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,700;1,400;1,700&display=swap&display=swap"></noscript>
  <link rel="preload" as="style" href="assets2/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets2/mobirise/css/mbr-additional.css" type="text/css">




</head>
<body>

  <section data-bs-version="5.1" class="menu menu2 cid-t5awEdlI9M" once="menu" id="menu2-0">
    <?php if($_SESSION['status'] === true): ?>

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="home.php">
                        <img src="<?php echo 'data:image;base64,'.base64_encode($_SESSION['logo']); ?>" alt="logo image" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="home.php"><?php if(!empty($_SESSION['bankname'])): echo $_SESSION['bankname']; endif; ?></a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                


                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="depositing.php">Deposit</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="withdrawing.php">Withdraw</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="balancing.php">Balance</a>
                    </li><li class="nav-item"><a class="nav-link link text-black display-4" href="transfering.php">Transfer</a></li>
                    <li class="nav-item"><a class="nav-link link text-black display-4" href="logout.php">Log out</a></li>

                </ul>

            


            </div>
        </div>
    </nav>
    <?php endif; ?>
</section>
