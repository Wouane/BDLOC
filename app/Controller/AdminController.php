<?php

namespace Controller;

use \Manager\Manager;
use \Manager\AdminManager;
use \W\Controller\Controller;
use \W\Security\AuthentificationManager as AuthentificationManager;

class AdminController extends Controller
{
	public function register_admin()
	{

		//$this->allowTo('admin');
		$AdminManager = new AdminManager();
		$error = "";
		$username = ""; 
		$email = ""; 
		$hashedPassword = "";

		if(!empty($_POST))
		{
			//Validation
			$username = trim(strip_tags($_POST['username']));
			$email = trim(strip_tags($_POST['email']));
			$password = trim(strip_tags($_POST['password']));
			$password_confirm = trim(strip_tags($_POST['password_confirm']));

			if(strlen($username) < 4){
				$error = "4 caractères minimum";
			}

			if($AdminManager->usernameExists($username)){
			 	$error = "Pseudo déjà utilisé !";
			 }

			 elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = "Votre email n'est pas valide !";
			}

			
			if($AdminManager->emailExists($email)){
			 	$error = "Email déjà utilisé !";
			 }

			 //Password identique
			if ($password != $password_confirm){
			$error = "Vos mots de passe ne correspondent pas !";
			}
			elseif(strlen($password) <= 5 || strlen($password_confirm) <= 5)
			{
				$error = "Veuillez saisir un mot de passe d'au moins 6 caractères !"; 
			}

			if(empty($error)){
				$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
			
				//insére en base de donnée
			$newAdmin = [
				"username" 		=> $username,
				"email"			=> $email,
				"role"			=> "admin",
				"password" 		=> $hashedPassword,
				];

				$AdminManager->insert($newAdmin);

				//Redirection
				$this->redirectToRoute('connexion_admin');
			}
		}
		$viewPass = [
				"error" => $error,
				"username" => $email,
				"email" => $email
				 ];
		$this->show('admin/register_admin', $viewPass);
	}

	public function login_admin()
	{
		$am = new AuthentificationManager();
		$error = ""; 
		$username = "";
		$data = []; 

		if(!empty($_POST)){
			//Validation
			$username = $_POST['username'];
			$password = $_POST['password'];
			

			$result = $am->isValidLoginInfo($username, $password);

			//Si valide : connexion
			if(isset($result)){
				$adminId = $result;
				
				//trouve administrateur
				$userManager = new \Manager\userManager();
				$admin = $userManager->find($adminId);
				
				//connecte l'user
				$am->logUserIn($admin);
				//redirection
				 $this->redirectToRoute('control_admin');


			}
			else {
				$error = "Mauvais identifiants !";
			}
		}
		$data['error'] = $error;
		$data['username'] = $username;
		$this->show('admin/login_admin', $data);
	}

	public function control()
	{ 
		$this->show('admin/control_admin');
	}
}