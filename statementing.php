<?php 

 include 'head/nav2.php';

if($_SESSION['status'] === true)
 {
    include 'Bankactionbodies/statementbody.php';
   include 'head/footer2.php';
 }
 else
 {
   echo '<div class="row" style="margin-top:10px;">
                 <div class="alert alert-success col-12">Validating please wait....</div>
     </div>';
    echo '<META HTTP-EQUIV="Refresh" Content="3; URL=logining.php">';
   // header('Location: logining.php');
 }
 ?>