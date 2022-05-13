<?php
include 'Connection.php'; 

 class LoadFeatures
 {
  private $latestnews;
 	private $news;
 	private $facebook;
 	 private $tweet; 
 	private $youtube;
 	 private $insta;
 	private $logo;
 	private $bankname;
 	private $bankmoto;
 	private $displayimage;
 	private $con;
  private $background_image;


 	public function __construct()
 	{
 		$c1 = new Connectionactivities();
 		$this->con = $c1->connecting();
 	}


 	public function newsfetching()
 	{
       $query ="SELECT * FROM `news` ORDER BY `ID` DESC";
       $run = mysqli_query($this->con,$query);
       $this->news = mysqli_fetch_all($run,MYSQLI_ASSOC);
 	}
 	public function bankinfo()
 	{
       $query ="SELECT * FROM bank_info";
       $run = mysqli_query($this->con,$query);
       $info = mysqli_fetch_all($run,MYSQLI_ASSOC);

       foreach ($info as $key) {
       	$this->facebook = $key['facebook'];
       	$this->tweet = $key['tweet'];
       	$this->youtube = $key['youtube'];
       	$this->insta = $key['instagram'];
       	$this->logo = $key['logo'];
       	$this->bankname = $key['bankname'];
       	$this->bankmoto =$key['bankmoto'];
       	$this->displayimage =$key['displayimage'];
        $this->background_image = $key['backgroundimage'];
       }
 	}

 	public function getlogo()
 	{
 		return $this->logo;
 	}
 	public function getnews()
 	{
 		return $this->news;
 	}
 	public function getfollowlinks()
 	{
 		return $this->followinglinks;
 	}
 	public function getbankname()
 	{
 		return $this->bankname;
 	}
 	public function getbankmoto()
 	{
 		return $this->bankmoto;
 	}
 	public function getdisplayimage()
 	{
 		return $this->displayimage;
 	}
 	public function getfacebook()
 	{
 		return $this->facebook;
 	}
 	public function gettweet()
 	{
 		return $this->tweet;
 	}
 	public function getyoutube()
 	{
 		return $this->youtube;
 	}
 	public function getinstagram()
 	{
 		return $this->insta;
 	}
  public function getbackgroundimage()
  {
    return $this->background_image;
  }

      public function savingaccount($account)
      {
            $query9 = "INSERT INTO cash_book (accountnumber,accountamount) VALUES('$account','1')";
            if(mysqli_query($this->con,$query9))
            {
              return "Successfully created account number: ".$account;  
            }
            else
            {
              return 'Something went wrong!';  
            }
      }

      public function loadinglatestnews()
      {
        $query10 ="SELECT * FROM news ORDER BY ID DESC LIMIT 2";
        $result = mysqli_query($this->con,$query10);

        $this->latestnews = mysqli_fetch_all($result,MYSQLI_ASSOC);
        
      }
     public function getlatestnews()
       {
          return $this->latestnews;
       }

 }

 ?>