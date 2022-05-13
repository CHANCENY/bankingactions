<?php 

 include 'Bankactivities/Transactions.php';

 $deposit = new TransactionClass();



 if(isset($_GET['statement']))
 {
 	$state = $deposit->statementgathering($_SESSION['number'],$_SESSION['password']);
 }

 ?>

  <?php if(empty($state)): ?>
   <div style="margin-top: 20px;">
    <h2 class="mbr-role mbr-fonts-style align-center mb-3 display-4">statements not available at the moment.</h2>
   </div>
  <?php else: ?>

  	<?php 
        $columns = array('ID','Account','Transaction_title','Transaction_info','Amount','Balance','Date','Time','Type','Reference');

  	 ?>


 <div class="table-responsive" style="margin-top:30px;">
                		
                     <table class="table table-bordered">
                     	<h3 style="text-align:center;">Bank statement</h3>
                     	<h5 style="text-align:center;"><?php echo $_SESSION['bankname']; ?></h5>

                     	<h6 style="text-align:center;"><?php echo $_SESSION['user'] ?></h6>
                     	<h6 style="text-align:center;"><?php echo $_SESSION['number'] ?></h6>
                     	
                     	<thead>
                     		<tr>
                     			<?php $x = count($columns); for ($i=0; $i < $x; $i++): ?>
                     			<th><?php echo $columns[$i]; ?></th>
                     		   <?php endfor ?>
                     		</tr>
                     	</thead>
                     	<tbody>
                     		   <?php foreach ($state as $key): ?>

                     		   	<tr>
                     		   		<td><?php echo $key['ID']; ?></td>
                     		   		<td><?php echo $key['account']; ?></td>
                     		   		<td><?php echo $key['transaction_title']; ?></td>
                     		   		<td><?php echo $key['transaction_description']; ?></td>
                     		   		
                     		   		<td><?php echo $key['amount']; ?></td>
                     		   		<td><?php echo $key['balance']; ?></td>
                     		   		<td><?php echo $key['date']; ?></td>
                     		   		<td><?php echo $key['time']; ?></td>
                     		   		<td><?php echo $key['type']; ?></td>
                     		   		<td><?php echo $key['reference']; ?></td>
                     		   	</tr>

                     		   <?php endforeach; ?>
                     	</tbody>
                     </table>

                	</div>
 <?php endif; ?>

 