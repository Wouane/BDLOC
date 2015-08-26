<?php 
	namespace Manager;

	class BookManager extends \W\Manager\Manager
	{
		public function getBooks($byNumber)
		{
			$byNumberSelected = 'selected';
			//$num = $byNumber;
			$sql = "SELECT *
					FROM $this->table					
					LEFT JOIN authors ON books.scenarist = authors.id
					ORDER BY RAND()
					LIMIT $byNumber";
			$sth = $this->dbh->prepare($sql);
			$sth->execute();
			return $sth->fetchAll();
		}
	}