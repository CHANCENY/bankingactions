<?php 
 session_start();
 ?>


<!DOCTYPE html>
<html>
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
<?php 

 




 if($_SESSION['status'] === true)
 {
       $_SESSION['status'] = false;
 $_SESSION['logo'] = null;
 $_SESSION['bankname'] = null;
 $_SESSION['moto'] = null;
 $_SESSION['displayimage'] = null;

 $_SESSION['facebook'] = null;
 $_SESSION['tweet'] = null;
 $_SESSION['youtube'] = null;
 $_SESSION['instagram'] = null;
 $_SESSION['background'] = null;
  $_SESSION['latest']= null;
  $_SESSION['news']= null;
  $_SESSION['user'] = null;
         $_SESSION['number'] = null;
         $_SESSION['email']= null;
         $_SESSION['profile'] = null;
         $_SESSION['type'] = null;
         $_SESSION['username'] = null;
         $_SESSION['address'] = null;
         $_SESSION['phone'] = null; 
         $password = null;
         $_SESSION['verified'] = false;

         echo '<div class="row" style="margin-top:10px;">
                 <div class="alert alert-success col-12">Logged out redirecting....</div>
     </div>';

         echo '<META HTTP-EQUIV="Refresh" Content="3; URL=index.php">';

   
 }
 else
 {
   echo '<div class="row" style="margin-top:10px;">
                 <div class="alert alert-success col-12">Validating please wait....</div>
     </div>';
    echo '<META HTTP-EQUIV="Refresh" Content="3; URL=logining.php">';
}

 ?>


 </html>