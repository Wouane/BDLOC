<?php 
	namespace Manager;

	class BookManager extends \W\Manager\Manager
	{
		public function getBooks($byNumber, $start)
		{	

			// déclaration des variables ($types de recherches)

			$byNumberSelected = 'selected';

			// $byType = 'selected';
			// $byFilter = 'checked';
			// $byKeywords = '';
			$keyword = $_GET['search'];

			//$start = $_GET['start'];
			//$start = 0;


			// LA REQUETE NINJA POWA DYNAMIQUE DE LA MORT
			$sql = "SELECT t.title AS ttitle, books.cover, books.title, books.id, books.stock, i.lastName AS ilastname, i.firstName AS ifirstname, s.lastName AS slastname, s.firstName AS sfirstname, c.lastName AS clastname, c.firstName AS cfirstname
					FROM $this->table					
					LEFT JOIN authors AS s ON books.scenarist = s.id
					LEFT JOIN authors AS i ON books.illustrator = i.id
					LEFT JOIN authors AS c ON books.colorist = c.id
					LEFT JOIN series AS t ON books.serieId = t.id					
					WHERE books.title LIKE :keyword OR c.lastName LIKE :keyword OR i.lastName LIKE :keyword OR s.lastName LIKE :keyword
					OR c.firstName LIKE :keyword OR i.firstName LIKE :keyword OR s.firstName LIKE :keyword
					OR t.title LIKE :keyword					
					ORDER BY title ASC
					LIMIT $start, $byNumber";
					
					// LA REQUETE DYNAMIQUE S'EXECUTE UNE SEULE FOIS
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(":keyword", '%'.$keyword.'%');
			$sth->bindValue(":byNumber", $byNumber);
			//$sth->bindValue(":start", $start);
			$sth->execute();
			return $sth->fetchAll();
		}
		// public function sortBooks($byType){
		// 	$sql = "SELECT title
		// 			FROM $this->table
		// 			ORDER BY title ASC";
		// 	$sth = $this->dbh->prepare($sql);			
		// 	$sth->bindValue(":byType", $byType);
		// 	$sth->execute();
		// 	return $sth->fetchAll();

		// }
		public function getDetails($id)
		{	
			// LA REQUETE NINJA POWA DYNAMIQUE DE LA MORT
			$sql = "SELECT books.cover, books.title, books.id, books.stock, books.publisher, i.lastName AS ilastname, i.firstName AS ifirstname, s.lastName AS slastname, s.firstName AS sfirstname, c.lastName AS clastname, c.firstName AS cfirstname
					FROM $this->table					
					LEFT JOIN authors AS s ON books.scenarist = s.id
					LEFT JOIN authors AS i ON books.illustrator = i.id 
					LEFT JOIN authors AS c ON books.colorist = c.id
					LEFT JOIN series AS t ON books.serieId = t.id					
					WHERE books.id = :id ";
					// LA REQUETE DYNAMIQUE S'EXECUTE UNE SEULE FOIS
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':id', $id );
			$sth->execute();			
			return $sth->fetch();
		}
	}