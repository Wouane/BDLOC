<?php 
	namespace Manager;

	class Book_cartManager extends \W\Manager\Manager
	{
				
		public function AddbooktoCart($cart_id, $book_id){
			$sql="INSERT INTO book_cart(cart_id, book_id) VALUES ($cart_id, $book_id)";
			$sth = $this->dbh->prepare($sql);
			return $sth->execute();
			
		}



	
	}