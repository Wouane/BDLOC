<?php 
	namespace Manager;

	class CartManager extends \W\Manager\Manager
	{

		public function findCard(){
			$sql = "SELECT user_id
					FROM $this->table";
			$sth = $this->dbh->prepare($sql);		
			$sth->execute();			
			return $sth->fetch();
			debug($sql);
		}
		public function AddbooktoCart($user_id){
			$sql="INSERT INTO carts(user_id, status, date_created) VALUES ($user_id,0,NOW())";
			$sth = $this->dbh->prepare($sql);
			$sth->execute();
			return $this->dbh->lastInsertId();
		}


		// public function ShowCart(){
		// 	$sql = "SELECT *
		// 			FROM $this->table";					
		// 	$sth = $this->dbh->prepare($sql);					
		// 	$sth->execute();			
		// 	$books = $sth->fetchAll();
		// 	return $books;
		// 	//debug($books);
		// }
	
	}