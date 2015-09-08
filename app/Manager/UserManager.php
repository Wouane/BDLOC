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

		public function countall()
		{
			//Qui compte 
			$sql = "SELECT COUNT(*)
					FROM users ";

			$sth = $this->dbh->prepare($sql);
			$sth->execute();
			$count = $sth->fetchColumn();

			//Return la réponse
			return $count;
		}

	}