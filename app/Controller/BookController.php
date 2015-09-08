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
		$this->show('book/details', ['book'=> $details]);
	}

	public function catalogue()
	{
		$bookManager = new BookManager();
		// déclaration des variables
			$byNumber = 20;
			$start = 0;
			$sort = 't.title';
			$_GET['search'] = "";			 
			$bdlocCat = [];
			$genre=[];
// CONDTION DE LA MORT

			//Pagination
			if(!empty($_GET['start'])){
				$start = $_GET['start'];
				//debug($start);
			}


		// UNE FOIS LA CONDITION FINIE (les différents options recherches sélectionnées)
		//alors affiche les livres et le catalogue

		$books = $bookManager->getBooks($byNumber, $start, $bdlocCat, $sort);
		//debug($books);

		$this->show('book/catalogue',["books"=>$books,"start"=>$start,"bdlocCat"=>$bdlocCat,"sort"=>$sort]);

	}
	public function search()
	{
		$bookManager = new BookManager();
		$books = $bookManager->getBooks($byNumber, $start, $bdlocCat, $sort);
	}

}