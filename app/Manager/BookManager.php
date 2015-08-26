<?php 
	namespace Manager;

	class BookManager extends \W\Manager\Manager
	{
		public function getBooks($byNumber)
		{
			if(!empty($_GET))
			{
			$byNumber = $_GET['byNumber'];			
			//$num = $byNumber;
			$sql = "SELECT * FROM $this->table
					ORDER BY RAND()
					-- LEFT JOIN books ON authors.title = books.illustrator
					LIMIT $byNumber";
			$sth = $this->dbh->prepare($sql);
			$sth->execute();
			return $sth->fetchAll();
			}
		}
	}