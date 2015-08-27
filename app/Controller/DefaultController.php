<?php

namespace Controller;
use \Manager\BookManager;
use \W\Controller\Controller;
use \W\Security\AuthentificationManager as AuthentificationManager;
class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}
		public function login()
	{
		$am = new AuthentificationManager();
		$this->show('user/login');
	}

	// public function catalogue()
	// {
	// 	$user = $this->getUser();
	// 	$bookManager = new BookManager();
	// 	$books = $bookManager->findAll("cover");
	// 	debug ($books);
	// 	//$this->show('catalogue');
	// 	$this->show('default/catalogue');
	// }

	public function cart()
	{
		$this->show('default/cart');
	}

	public function credits()
	{
		$this->show('default/credits');
	}

	// public function contact()
	// {
	// 	if (!empty($_POST)) {
	// 		# code...
		
	// 	$mail = new \PHPMailer();

	// 	$mail->From = $_POST['email'];
	// 	$mail->FromName = $_POST['name'];
	// 	$mail->Subject = $_POST['objet'];
	// 	$mail->addAddress('bdlocbdloc@gmail.com', 'Admin');

	// 	$mail->send();
	// }
	
	// 	$this->show('default/contact');
	// }




}
