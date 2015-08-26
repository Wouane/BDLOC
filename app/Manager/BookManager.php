<?php 
	namespace Manager;

	class BookManager extends \W\Manager\Manager
	{
		public function getBooks($num)
		{
		$sql = "SELECT * FROM $this->table
				ORDER BY RAND() 
				LIMIT $num";
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();
			
		}
	}