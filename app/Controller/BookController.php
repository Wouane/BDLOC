<?php 
namespace Controller;
use \Manager\BookManager;
use \W\Controller\Controller;

class BookController extends Controller 
{
	public function details($id)
	{
		$bm = new BookManager();
		$details = $bm->getDetails($id);
		debug($details);
		$this->show('book/details', ['book'=> $details]);
	}

	public function catalogue()
	{
		$bookManager = new BookManager();
		// déclaration des variables
		$byNumber = 20;
		// $byType = $_POST['ByType'];
		//$keyword = "";


		// CONDTION DE LA MORT

		if(!empty($_GET['byNumber'])){
			$byNumber = $_GET['byNumber'];
		}

		if (!empty($_GET['search'])) {
			$keyword = $_GET['search'];
			//debug($keyword);
		}else{
			$_GET['search']="";
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
	public function search()
	{
		$bookManager = new BookManager();
		$books = $bookManager->getBooks($byNumber);



	}
}