<?php 
namespace Controller;
use \Manager\CartManager;
use \W\Controller\Controller;

class CartController extends Controller {
	publicfunction cart {
	$cm = new CartController;
	}

//MONTRER LES LIVRES DANS LE PANIER

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