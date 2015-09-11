<?php 
	namespace Manager;

	class Book_cartManager extends \W\Manager\Manager
	{
				
		public function AddbooktoCart($cart_id, $book_id){
			$sql="INSERT INTO book_carts(cart_id, book_id) VALUES ($cart_id, $book_id)";
			$sth = $this->dbh->prepare($sql);
			return $sth->execute();
			
		}

		public function findAllBooksInCart($cart_id){
			$sql = "SELECT book_id			
					FROM book_carts
					WHERE cart_id = $cart_id";
			$sth = $this->dbh->prepare($sql);

			$sth->execute();			
			return $sth->fetchAll();
		}

	
	}