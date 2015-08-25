<?php

namespace Controller;

use \Manager\UserManager;
use \W\Controller\Controller;
use \W\Security\AuthentificationManager as AuthentificationManager;
class UserController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		/* Afficher la page */
		$this->show('default/home');
	}
	public function Fakedata(){
		$userManager = new UserManager();
		$users = 1000;

	//paamayim nekutotayim

	$faker = \Faker\Factory::create("fr_FR");

	for($i=0; $i<$users; $i++){		
		$username = $faker->userName;
		$email = $faker->email;
		$lastname = $faker->firstname;
		$firstname = $faker->lastname;
		$phone_number = $faker->phoneNumber;
		$user_data = array($username,$email,$firstname,$lastname,$phone_number);
		$newData = [
				"username" 		=> $username,
				"email" 		=> $email,
				"firstname" 	=> $firstname,
				"lastname" 		=> $lastname,
				"phone_number" 	=> $phone_number,
				];
		$userManager->insert($newData);
		//print_r($user_data);
		}

	$time_end = microtime(true);
	//dividing with 60 will give the execution time in minutes other wise seconds
	$execution_time = ($time_end - $time_start);

	//execution time of the script
	echo '<b>Total Execution Time:</b> '.$execution_time.' seconds';
	$this->show('user/fake_data');
	}

	//Page profile

	public function profil()
	{
		$this->show('user/profile');
	}

// Function d'inscription //
	public function register()
	{
		$userManager = new UserManager();
		$error = "";
		$username = "";
		$email = "";
		$firstname = "";
		$lastname = "";
		$streetnumber = "";
		$streetname = "";
		$phonenumber = "";
		$zipcode = "";

		$user_name_regex = "/^[\p{L}0-9._-]{2,100}$/u";


		if(!empty($_POST))
		{
			$email = trim(strip_tags($_POST['email']));
			$username = trim(strip_tags($_POST['username']));
			$password = trim(strip_tags($_POST['password']));
			$confirm = trim(strip_tags($_POST['confirm']));
			$firstname = trim(strip_tags($_POST['firstname']));
			$lastname = trim(strip_tags($_POST['lastname']));
			$streetnumber = trim(strip_tags($_POST['streetnumber']));
			$streetname = trim(strip_tags($_POST['streetname']));
			$zipcode = trim(strip_tags($_POST['zipcode']));
			$phonenumber = trim(strip_tags($_POST['phonenumber']));


		// username valide ?
			if(strlen($username) < 4)
			{
				$error = "Votre Pseudo doit comporter 4 lettres minimum !";
			}
			if(!preg_match($user_name_regex, $username)) {
				$error = "Votre Pseudo ne doit pas contenir de caractère spéciaux !";
			}
			if ($userManager->usernameExists($username)) {
				$error = "Ce Pseudo est deja utillisé !";
			}
		// Email valide ?
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$error = "Email non valide";
			}
			if ($userManager->emailExists($email)) {
				$error = "Cet Email est deja utillisé !";
			}
		// ZIPCODE valide
			if($zipcode <= "75000" || $zipcode >= "75021"){
				$error = "Vous devez habiter Paris pour vous inscrire a notre service !";
			}
		// Téléphone valide
			if(preg_match("/^[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/", $phonenumber)) {
  				// $phonenumber is valid
				$error = "Votre numéro n'est pas valide !";
			}
		//	2er cihffre du Telephone coresponde a 01,02,03,04,05,06,07,08 ou 09 
			if(substr($phonenumber, 0,2) < "01" || substr($phonenumber, 0,2) > "09") {
				$error = "Votre numero de telephone n'es pas dans les normes !";
			}
		// verif du MDP -- il doit contenir au moin 1 lettre et 1 chiffre !
			else {
				$containsLetter = preg_match('/[a-zA-Z]/', $password);
				$containsDigit = preg_match('/\d/', $password);

				if (!$containsLetter || !$containsDigit ) {
					$error = "Veulliez choisir un mot de passe avec au moin une lettre,  et un chiffre !";
				}
			}
	 	// Password identiques ?
			if($password != $confirm)
			{
				$error = "Vos mots de passe doivent être identiques !";
			}

	 	//si valide...
			if(empty($error))
			{
		//hasher le mot de passe
				$hash = password_hash($password, PASSWORD_DEFAULT);

		//insérer en base

				$newSubscriber = [
				"username" 		=> $username,
				"email" 		=> $email,
				"password" 		=> $hash,
				"firstname" 	=> $firstname,
				"lastname" 		=> $lastname,
				"zip_code" 		=> $zipcode,
				"street_number" => $streetnumber,
				"street_name" 	=> $streetname,
				"phone_number" 	=> $phonenumber,
				"date_modified" => date("Y-m-d H:i:s"),
				"date_created" 	=> date("Y-m-d H:i:s"),
				];
				$userManager = new \Manager\UserManager();
				$userManager->insert($newSubscriber);
			}				

		}
		/* Afficher la page */
		$data = [];
		$data['error'] = $error;
		$data['username'] = $username;
		$data['email'] = $email;
		$data['firstname'] = $firstname;
		$data['lastname'] = $lastname;
		$data['zipcode'] = $zipcode;
		$data['streetnumber'] = $streetnumber;
		$data['streetname'] = $streetname;
		$data['phonenumber'] = $phonenumber;

		$this->show('user/register', $data);
	}

// Function de connexion //
	public function login()
	{
		$am = new AuthentificationManager();
		$error = "";
		$username = "";
		if(!empty($_POST))
		{
	 	//validation
			$password = $_POST['password'];
			$username = $_POST['username'];
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
				$error = "Mauvais Identifiants !";
			}
		}
		$data = [];
		$data['error'] = $error;
		$data['username'] = $username;
		/* Afficher la page */
		$this->show('user/login',$data);
	}

}