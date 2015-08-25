<?php 
	namespace Manager;

	class UserManager extends \W\Manager\UserManager
	{
		public function  Fakedata(){
			$this->dbh->query("TRUNCATE users;");
			
		}
	}