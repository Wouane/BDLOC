<?php 
	namespace Manager;

	class CartManager extends \W\Manager\Manager
	{

		public function AddBooktoCart($book_id){

		}


		public function ShowBooksintoCart(){


			

			$sql = "SELECT *
					FROM books
					WHERE id = :id"


		}

		
	}