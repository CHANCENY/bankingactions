<?php 
include 'connections.php';


$con1 = new Connection();
$con = $con1->connecting();




 function Registration($firstname,$lastname,$username,$email,$password,$image,$typeaccount,$address,$phone)
 {
 	global $con;

 	$numbers = '5809000';
 	$random = mt_rand(100,900);
 	$numbers = $numbers.strval($random);
 	
 	
 	$pass = md5($password);

 	$query = "INSERT INTO users (firstname,lastname,username,email,password,type,profile,accountnumber,address,phone) VALUES ('$firstname','$lastname','$username','$email','$pass','$typeaccount','$image','null','$address','$phone')";
 	$result = mysqli_query($con,$query);
 	if($result)
 	{
 		
 		$query2 = "SELECT * FROM users WHERE username ='$username' AND email = '$email' AND password = '$pass'";
 		$id = null;
 		$res = mysqli_query($con,$query2);
        $person = mysqli_fetch_all($res,MYSQLI_ASSOC);



        foreach ($person as $key) {
        	$id = $key['ID'];
        }
        $ids = strval($id);

        $accountnumber = $numbers.$ids;

        $query3 = "UPDATE `users` SET `accountnumber` = '$accountnumber' WHERE `users`.`ID` = $id";
        if(mysqli_query($con,$query3))
        { 
            global $load;           
            return $load->savingaccount($accountnumber);      	
        }
        else
        {
        	return 'Something went wrong!';
        }
 	}
 	else
 	{
 		return 'Failed to create account!';
 	}	

 }

 function logininguser($account,$password)
 {
 	global $con;
    $_SESSION['password'] = $password;
 	$pass = md5($password);
 	$query = "SELECT * FROM users WHERE accountnumber='$account';";
 	$result = mysqli_query($con,$query);
 	if(mysqli_num_rows($result) > 0)
 	{
       $user = mysqli_fetch_all($result,MYSQLI_ASSOC);
       $password = null;
       
       $_SESSION['status'] = false;
       foreach ($user as $key) {
         $_SESSION['user'] = $key['firstname'].' '.$key['lastname'];
         $_SESSION['number'] = $key['accountnumber'];
         $_SESSION['email']=$key['email'];
         $_SESSION['profile'] =$key['profile'];
         $_SESSION['type'] = $key['type'];
         $_SESSION['username'] = $key['username'];
         $_SESSION['address'] = $key['address'];
         $_SESSION['phone'] =$key['phone']; 
         $password =$key['password'];

       }

       if($password === $pass)
       {
        
        return true;
       }
       else
       {
        return false;
       }

 	}
 	else
 	{
 		return "Something went wrong try again!";
 	}
 }

 function verifyforgetpassworduser($username, $email)
 {
    if(empty($username) && empty($email))
    {
        return "Fill in all fields!";
    }
    else
    {
        global $con;
        $query = "SELECT * FROM users WHERE username='$username'";
        $run = mysqli_query($con,$query);
        $personfound = mysqli_fetch_all($run,MYSQLI_ASSOC);
        if(!empty($personfound))
        {
          $emails = null;
          foreach ($personfound as $key) {
              $emails = $key['email'];
              $_SESSION['newId'] = $key['ID'];
          }

          if($emails === $email)
          {
            $_SESSION['verified'] = true;
             return true;  
          }
          else
          {
            return "Email not correct!";
          }
        }
        else
        {
            return "Username not correct!";
        }
    }
 }

 function changepassword($newpassword)
 {
    global $con;
    $pass = md5($newpassword);
    $id = $_SESSION['newId'];
    $ids = intval($id);
     $query3 = "UPDATE `users` SET `password` = '$pass' WHERE `users`.`ID` = $ids";
    $update = mysqli_query($con,$query3);
    if($update === true)
    {
        return true;
    }
    else
    {
        return 'Changing failed!';
    }

 }


 ?>