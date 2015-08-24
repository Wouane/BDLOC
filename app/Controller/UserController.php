<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager as AuthentificationManager;
class UserController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}


	public function register()
	{

	}

		public function login()
	{
		$am = new AuthentificationManager();
	 	$error 		= "";
	 	$username 	= "";
	 	if(!empty($_POST))
	 	{
	 		//validation
	 	$password 	= $_POST['password'];
	 	$username 	= $_POST['username'];
	 		$result = $am->isValidLoginInfo($username, $password);
	 		//si valide : connexion
	 		if($result > 0)
	 		{
	 			$userId = $result;
	 			//récupère l'utilisateur
	 			$userManager = new \Manager\UserManager();
	 			$user = $userManager->find($userId);

	 			//connecte l'user
	 			$am->LogUserIn($user);
	 			//redirection
	 			$this->redirectToRoute('show_all_terms');
	 		}
	 		else 
	 		{
	 			$error = "Mauvais Identifiants";
	 		}
	 	}
	 	$data = [];
	 	$data['error']=$error;
	 	$data['username']=$username;
	 	$this->show('user/login',$data);//chemin pour voir la page login
	}

}