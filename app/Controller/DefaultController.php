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

	public function contact()
	{
		$result = "";
		if (!empty($_POST)) {
		
		$mail = new \PHPMailer;

		//configuration de l'envoi
		$mail->isSMTP();
		$mail->setLanguage('fr');
		$mail->CharSet = 'UTF-8';

		//debug
		$mail->SMTPDebug   = 0;
		$mail->Debugoutput = 'html';

		//config du serveur smtp
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587; 
		$mail->SMTPSecure = 'tls'; 
		$mail->SMTPAuth = true;

		//Identifiant
		global $w_config;
		$smtp_user = $w_config['smtp_user'];
		$smtp_pass = $w_config['smtp_pass'];
		$mail->Username = $smtp_user;
		$mail->Password = $smtp_pass;

		//envoie
		$mail->From = $_POST['email'];
		$mail->FromName = $_POST['name'];
		$mail->Subject = $_POST['subject'];
		$mail->Body = $_POST['message'];

		//To us
		$mail->addAddress('bdlocbdloc@gmail.com', 'Admin');

		//mail au format HTML
		$mail->isHTML(true);

		//envoie du mail ou error
		if(!$mail->send())
			{
				$result = "Mailer Error: " .$mail->ErrorInfo;
			}else{
				$result = "Votre message a bien été envoyé";
			}
	}
		//affiche la page contact
		$this->show('default/contact', [ 'result' => $result ]);
	}




}
