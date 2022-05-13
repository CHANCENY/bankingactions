<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

 global $toemail;
 class SenderEmail
 {
 	private $senderemail;
 	private $sendername;
 	private $sendersubject;
 	private $sendermessage;
 	

 	public function complaining($email,$name,$subject,$message)
 	{
 		$this->senderemail = $email;
 		$this->sendername = $name;
 		$this->sendersubject =$subject;
 		$this->sendermessage ='<h3>'.$this->sendername.'</h3><p>'.$message.'</p>';
 	}
 	public function transsactionreport($title,$desc,$youraccount,$amount,$nameoftransaction,$email)
 	{
 		global $toemail;
 		$toemail = $email;
 		$this->senderemail = $email;
 		$this->sendername =$nameoftransaction;
 		$this->sendersubject =$title;
 		$this->sendermessage ='<h3>From:'.$youraccount.'</h3><p>Type: '.$nameoftransaction.'</p><p>Account: '.$youraccount.'</p><p>
 		Amount: '.$amount.'</p><p>Description: '.$desc.'</p>';

 	}

 public function emailing()
 {
 		$mail = new PHPMailer(true);
 		global $toemail;

  try {
	//$mail->SMTPDebug = 3;									
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'elegantbraids12@gmail.com';				
	$mail->Password = 'chance50903019';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('elegantbraids12@gmail.com',$this->sendername);
		
	$mail->addAddress($toemail,'PNB BANK');

	//$mail->addAddress('recipient2@example.com', 'Name');
	
	$mail->isHTML(true);								
	$mail->Subject = $this->sendersubject;
	$mail->Body = $this->sendermessage;
	//$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	return "Mail has been sent successfully!";
    } catch (Exception $e) {
	     return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }

   }
 }

 ?>