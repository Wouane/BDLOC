<?php 
namespace Controller;
use \Manager\CartManager;
use \W\Controller\Controller;

class CartController extends Controller{

	public function cart(){
	$cm = new CartController;
	}

	//methode pour récupérer l'id du book cliqué
	public function AddBooktoCart($book_id){

		$id = $_GET['id'];
		
		if(!empty($_GET['id'])){
			$cm = new CartManager();
			$books = $cm->getBooks($id);

			$this->show('book/details', ['cart'	=> $books]);

		}

	}


}

// 	public function showBooks()
// 	{   
//		$books = $_GET['book_id'];
// 		$this->allowTo('user');
// 		$CartManager = new \Manager\CartManager();
// 		$Cart = $CartManager->findAll("modifiedDate", "DESC");
// 		// debug($books);
// 		// print_r(get_class_methods($bookManager));
// 		$this->show('/catalogue/panier/', ['books' => $books]);
// 	}

// //DELETE UN BOOK

// 	public function deleteBook($id)
// 	{   
// 		$this->allowTo('user');
// 		$CartManager = new\Manager\CartManager();

// 		// $deleteBooks = $CartManager->delete($id);
// 		$CartManager->delete($id);
// 		$this->redirectToRoute('panier');
// 	}
// }