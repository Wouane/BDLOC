<?php 
namespace Controller;
use \Manager\BookManager;
use \W\Controller\Controller;

class BookController extends Controller
{
	public function catalogue()
	{

		$byNumber = 20;
		$bookManager = new BookManager();

		if(!empty($_GET['byNumber'])){
			$byNumber = $_GET['byNumber'];
		}
		
		$books = $bookManager->getBooks($byNumber);
		//debug($books);
		$this->show('book/catalogue',["books"=>$books]);
	}

	// Catalogue TRI PAR TYPE ALPHA / DATE DE CREATION / DATE DE PUBLICATION

	public function catalogueOrderby()
	{	
		$bookManager = new BookManager();
		
		$books = $bookManager->getBooks($byType);
		$this->show('book/catalogue',["books"=>$books]);

	}







}