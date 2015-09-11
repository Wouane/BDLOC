<?php 
namespace Controller;
use \Manager\CartManager;
use \W\Controller\Controller;

class CartController extends Controller{


 	//methode pour récupérer l'id du book cliqué
	public function showCart()
		{
			$cm = new \Manager\CartManager();
			$cbm = new \Manager\Book_cartManager();
			$bm = new \Manager\BookManager();
			// récupérer l'id du cart
			$user = $this->getUser();
			$user_id = $user['id'];
			$cart_id = $cm->findCart($user_id);
			// récupérer les id des livres 
			$books_ids = $cbm->findAllBooksInCart($cart_id);

			//récupérer les infos du livre
			$books = $bm->showBooks($books_ids);
			//debug($books);
			
			$this->show('cart/Cart', ['books' => $books, 'user' => $user]);
			
		}
 
 
	public function AddbooktoCart($book_id)
		{   
			$books="";
			$cm = new \Manager\CartManager();
			$cbm = new \Manager\Book_cartManager();
			$user = $this->getUser();
			$user_id = $user['id'];

			$cart_id = $cm->findCart($user_id);

			if (empty($cart_id)) {
				$cart_id = $cm->AddbooktoCart($user_id);
			}
			
			$cbm->AddbooktoCart($cart_id, $book_id);
			$this->redirectToRoute('catalogue');
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