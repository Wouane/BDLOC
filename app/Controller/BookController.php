<?php 
namespace Controller;
use \Manager\BookManager;
use \W\Controller\Controller;

class BookController extends Controller
{
	public function catalogue(){
		$num = 20;
		$bookManager = new BookManager();
		// $bookManager->BookManager($books);
		$books = $bookManager->getBooks($num);
		debug($books);
		$this->show('book/catalogue',["books"=>$books]);
	}
}