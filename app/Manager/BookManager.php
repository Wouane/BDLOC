<?php 
	namespace Manager;

	class BookManager extends \W\Manager\Manager
	{
		public function getBooks($byNumber)
		{	

			// déclaration des variables ($types de recherches)

			$byNumberSelected = 'selected';

			// $byType = 'selected';
			// $byFilter = 'checked';
			// $byKeywords = '';
			

			// LA REQUETE NINJA POWA DYNAMIQUE DE LA MORT
			$sql = "SELECT books.cover, books.title, books.id, books.stock, i.lastName AS ilastname, i.firstName AS ifirstname, s.lastName AS slastname, s.firstName AS sfirstname, c.lastName AS clastname, c.firstName AS cfirstname
					FROM $this->table					
					LEFT JOIN authors AS s ON books.scenarist = s.id
					LEFT JOIN authors AS i ON books.illustrator = i.id 
					LEFT JOIN authors AS c ON books.colorist = c.id
					ORDER BY RAND()
					LIMIT $byNumber";



					// LA REQUETE DYNAMIQUE S'EXECUTE UNE SEULE FOIS
			$sth = $this->dbh->prepare($sql);
			$sth->execute();			
			return $sth->fetchAll();
		}
	}