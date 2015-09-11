<?php 
	namespace Manager;

	class CartManager extends \W\Manager\Manager
	{

		public function findCart($user_id){
			$sql = "SELECT id			
					FROM $this->table
					WHERE user_id = $user_id";
			$sth = $this->dbh->prepare($sql);
			$sth->execute();			
			return $sth->fetchColumn();
		}
		public function AddbooktoCart($user_id){
			$sql="INSERT INTO carts(user_id, status, date_created) VALUES ($user_id,0,NOW())";
			$sth = $this->dbh->prepare($sql);
			$sth->execute();
			return $this->dbh->lastInsertId();
		}


	}