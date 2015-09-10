<?php 
	namespace Manager;

	class BookManager extends \W\Manager\Manager
	{
		public function getBooks($byNumber, $start, $bdlocCat, $sort, $keyword)
		{	

			// déclaration des variables ($types de recherches)
			$byNumberSelected = 'selected';
			
			$keyword = "";
			$genre = "";
			$dispo = "";			
			//Sort by number
			if(!empty($_GET['byNumber'])){
				$byNumber = $_GET['byNumber'];
			}
			// sort by search
			if (!empty($_GET['search'])) {
				$keyword = $_GET['search'];
				//debug($keyword);
			}else{
				$keyword = "";
			}

			//Pagination
			if(!empty($_GET['start'])){
				$start = $_GET['start'];
				//debug($start);
			}
			// sort by date and title
			
			// sort by categories
			if(!empty($_GET['genre'])){				
				$bdlocCat = $_GET['genre'];
			}
			if(!empty($_GET['byOrder'])){
			
				if($_GET['byOrder'] == "alpha"){
					$sort = "t.title";
				}
				elseif($_GET['byOrder'] == "date"){
					$sort = "dateCreated";
				}
				elseif($_GET['byOrder'] == "publication"){
					$sort = "id";
				}
			}

			if(!empty($bdlocCat)){
			$genre = 	"AND t.style LIKE '%".$bdlocCat[0]."%'";			
						for ($i=1; $i<count($bdlocCat); $i++){
						$genre.="OR t.style LIKE '%".$bdlocCat[$i]."%'";
				//debug($genre);
				}
			}
			if(!empty($_GET['dispo'])){
				if ($_GET['dispo'] == 'disponibles'){					
							$dispo = "books.stock != 0 AND";
							//debug($dispo);
						}
						else{
							$dispo = " books.stock = 0 AND";
						}
			}

			
			// LA REQUETE NINJA POWA DYNAMIQUE DE LA MORT
$sql = "SELECT  t.style AS catstyle, t.title AS ttitle, books.dateCreated, books.cover, books.title, books.id, books.stock, i.lastName AS ilastname, i.firstName AS ifirstname, s.lastName AS slastname, s.firstName AS sfirstname, c.lastName AS clastname, c.firstName AS cfirstname
					FROM $this->table					
					LEFT JOIN authors AS s ON books.scenarist = s.id
					LEFT JOIN authors AS i ON books.illustrator = i.id
					LEFT JOIN authors AS c ON books.colorist = c.id
					LEFT JOIN series AS t ON books.serieId = t.id					
					WHERE  
					-- availibility
						 $dispo	
					-- or search in field
						(books.title LIKE :keyword OR c.lastName LIKE :keyword OR i.lastName LIKE :keyword OR s.lastName LIKE :keyword
						OR c.firstName LIKE :keyword OR i.firstName LIKE :keyword OR s.firstName LIKE :keyword
						OR t.title LIKE :keyword) 
					-- or by categories
						$genre	
					 				
					ORDER BY $sort ASC
					LIMIT $start, $byNumber";
					
					// LA REQUETE DYNAMIQUE S'EXECUTE UNE SEULE FOIS
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(":keyword", '%'.$keyword.'%');
			$sth->bindValue(":byNumber", $byNumber);
			$sth->bindValue(":genre", $genre);			
			$sth->execute();
			//debug($sql);
			return $sth->fetchAll();

		}

		public function getDetails($id)
		{	
			// LA REQUETE Pour la page details.php
			$sql = "SELECT t.title AS ttitle, t.note AS nnote, books.cover, books.title, books.id, books.stock, books.publisher, i.lastName AS ilastname, i.firstName AS ifirstname, s.lastName AS slastname, s.firstName AS sfirstname, c.lastName AS clastname, c.firstName AS cfirstname
					FROM $this->table					
					LEFT JOIN authors AS s ON books.scenarist = s.id
					LEFT JOIN authors AS i ON books.illustrator = i.id 
					LEFT JOIN authors AS c ON books.colorist = c.id
					LEFT JOIN series AS t ON books.serieId = t.id					
					WHERE books.id = :id";					
					// LA REQUETE DYNAMIQUE S'EXECUTE UNE SEULE FOIS
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':id', $id );
			$sth->execute();
			return $sth->fetch();
			
		}


	}