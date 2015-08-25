<?php 
namespace Controller;
use \Manager\BookManager;
use \W\Controller\Controller;

class BookController extends Controller
{
	public function catalogue(){
		$user = $this->getUser();
		$bookManager = new BookManager();
		$books = $bookManager->findAll("cover");
		$this->show('book/catalogue',["books"=>$books]);
	}
}