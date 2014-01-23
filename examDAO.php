<?php
	require_once('config.php');

	class examDAO{
		public static function InsertUser ($fname, $lname, $email, $password){
		global $db;
		
		$query = "INSERT INTO user (fname, lname, email, password) VALUES ('{$fname}','{$lname}','{$email}','{$password}')";
		$result = $db->query($query);
		if($result){
			header ('location:login.php');

		}else{
			header ('location:signin.php');
			}

		}
	
		public static function InsertLogin($email, $password){
		global $db;

		$query = "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}' ";
		$result = $db->query($query);
		if($result->num_rows > 0){
			header ('location:question.php');

		}else{
			header ('location:login.php');
			}

		}	
	}	
?>
