<?php 
	namespace Manager;

	class BookManager extends \W\Manager\Manager
	{
		public function getBooks($byNumber)
		{	
			$byNumberSelected = 'selected';
			//$num = $byNumber;
			$sql = "SELECT books.cover, books.title, books.id, books.stock, i.lastName AS ilastname, i.firstName AS ifirstname, s.lastName AS slastname, s.firstName AS sfirstname, c.lastName AS clastname, c.firstName AS cfirstname
					FROM $this->table					
					LEFT JOIN authors AS s ON books.scenarist = s.id
					LEFT JOIN authors AS i ON books.illustrator = i.id 
					LEFT JOIN authors AS c ON books.colorist = c.id
					ORDER BY RAND()
					LIMIT $byNumber";


			$sth = $this->dbh->prepare($sql);
			$sth->execute();			
			return $sth->fetchAll();
		}

		public function OrderBy($byType)
		{
			$byAlpha = 'selected';
			$byDateCreated = 'selected';
			$byDatePublish = 'selected';
			
			$sql = "SELECT cover, title
					FROM books					
					ORDER BY title ASC";					
					
			$sth = $this->dbh->prepare($sql);
			$sth->execute();			
			return $sth->fetchAll();
		}

	}