<?php 

 include 'head/nav2.php';

 ?>

 <?php if($_SESSION['status'] === true): ?>

 <section data-bs-version="5.1" class="timeline2 cid-t5azBrTaGj" id="timeline2-5">




    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>Bank news</strong></h3>

        </div>

    <?php if(!empty($_SESSION['news'])): ?>

        <?php foreach ($_SESSION['news']  as $key): ?>
           
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
         </div>
      <form action="allnews.php" method="GET">
          <button type="submit" name="allnews" class="btn btn-primary display-4">Top</button>
      </form>

    <?php else: ?>

       
       <p class="mbr-text mbr-fonts-style display-7" style="text-align: center;">
                          No news available.
                        </p>


    <?php endif; ?>

     
      

</section>

<?php 
 include 'head/footer2.php';
 ?>

<?php else: ?>
 <?php 
 
    echo '<div class="row" style="margin-top:10px;">
                 <div class="alert alert-success col-12">Validating please wait....</div>
     </div>';
    echo '<META HTTP-EQUIV="Refresh" Content="3; URL=logining.php">';

  ?>  
  <?php endif; ?> 
