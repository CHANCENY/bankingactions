<?php

 include 'head/nav.php';
 
 if($_SESSION['verified']=== true)
 {
       include 'password/Pbody.php';
       include 'head/footer.php';
 }
 else
 {
    echo '<div class="row" style="margin-top:10px;">
                 <div class="alert alert-success col-12">Validating please wait....</div>
     </div>';
     echo '<META HTTP-EQUIV="Refresh" Content="3; URL=index.php">';
 }

 

 ?>