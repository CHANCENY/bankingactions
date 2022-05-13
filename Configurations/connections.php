<?php 


 class Connection
 {
 	private $mysql_host;
 	private $mysql_user;
 	private $mysql_password;
 	private $mysql_dbname;
 	public $connection;


 	public function __construct()
 	{
 		$this->mysql_host = 'localhost';
 		$this->mysql_user ='root';
 		$this->mysql_password =null;
 		$this->mysql_dbname = 'Banking_online';

 	}

 	public function connecting()
 	{
 		$this->connection =new mysqli($this->mysql_host,$this->mysql_user,$this->mysql_password,$this->mysql_dbname);
 		if($this->connection)
 		{
 			return $this->connection;
 		}
 		else
 		{
 			die("Connection failed: ");
 			
 		}
 	}
 }

 ?>