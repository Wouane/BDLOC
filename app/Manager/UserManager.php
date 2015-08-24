<?php 
	namespace Manager;

	class UserManager extends \W\Manager\UserManager
	{
		public function checkMail($email)		
		{
			$sql = "SELECT email FROM users WHERE email = :email";
	    	$sth = $dbh->prepare($sql);
	    	$sth->execute(array(":email" => $email));
	    	$foundEmail = $sth->fetchColumn();
	    	return $foundEmail;
		}

		public function checkUsername($username)		
		{
			$sql = "SELECT username FROM users WHERE username = :username";
	    	$sth = $dbh->prepare($sql);
	    	$sth->execute(array(":username" => $username));
	    	$foundUsername = $sth->fetchColumn();
	    	return $foundUsername;
		}
		public function register()
		{
			
		}

	}