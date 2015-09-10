<?php 
namespace Controller;
use \Manager\CartManager;
use \W\Controller\Controller;

class CartController extends Controller{

// 		public function cart(){
// 			$cm = new CartManager();
// 			$this->show('cart/Cart');
// 		}
// 	//methode pour récupérer l'id du book cliqué
		public function Cart(){
		$books="";
		$cm = new \Manager\CartManager();
		$user = $this->getUser();
		$this->show('cart/Cart', ['books' => $books, 'user' => $user]);
		
	}
 

	public function AddbooktoCart($book_id)
	{   $books="";
		$cm = new \Manager\CartManager();
		$cbm = new \Manager\Book_cartManager();
		$user = $this->getUser();
		$user_id = $user['id'];
		$cart_id = $cm->AddbooktoCart($user_id);
		$cbm->AddbooktoCart($cart_id, $book_id);
		$cm->findCard();



		$this->show('cart/Cart', ['books' => $books, 'user' => $user]);

		
	}
}
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