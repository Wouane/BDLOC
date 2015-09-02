<?php 
	namespace Manager;

	class UserManager extends \W\Manager\UserManager
	{
		public function Fakedata(){
			$this->dbh->query("TRUNCATE users;");
			
		}

		public function getToken($token)
		{
			$sql = "SELECT * FROM users
			WHERE token = :token";

			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(":token", $token);
			$sth->execute();
	
			$foundUser = $sth->fetch();

			return $foundUser;
		}

		public function deleteProfile($id)
		{
			$sql = "DELETE * FROM users
			WHERE id = :id";

			$sth = $this->$dbh->prepare($sql);
			$sth->bindValue(":id", $id);
			$sth->execute();

		}

	}