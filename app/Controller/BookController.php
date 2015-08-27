<?php 
namespace Controller;
use \Manager\BookManager;
use \W\Controller\Controller;

class BookController extends Controller
{
	public function catalogue()
	{
		$bookManager = new BookManager();
		// déclaration des variables
		$byNumber = 20;
		// $byType = $_POST['ByType'];


		// CONDTION DE LA MORT

		if(!empty($_GET['byNumber'])){
			$byNumber = $_GET['byNumber'];
		}

		// if(!empty($_GET['byType'])){
		// 	$byType = $_GET['byType'];
		// }		


		// UNE FOIS LA CONDITION FINIE (les différents options recherches sélectionnées)
		//alors affiche les livres et le catalogue

		$books = $bookManager->getBooks($byNumber);
		//debug($books);
		$this->show('book/catalogue',["books"=>$books]);
	}
}