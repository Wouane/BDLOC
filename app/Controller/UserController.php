<?php

namespace Controller;

use \Manager\Manager;
use \Manager\UserManager;
use \W\Controller\Controller;
use \W\Security\AuthentificationManager as AuthentificationManager;
class UserController extends Controller
{


/*==================PAGE D'ACCUEIL PAR DEFAUT===================*/
	public function home()
	{
	/* Afficher la page */
		$this->show('default/home');
	}

/*==================PAGE FORGOT PASSWORD===================*/
	public function forgotPassword(){
		$userManager = new UserManager();
		$succes = "";
		$error = "";

		if (!empty($_POST)) {

			$factory = new \RandomLib\Factory;
			$generator = $factory->getGenerator(new \SecurityLib\Strength(\SecurityLib\Strength::MEDIUM));
	 		$token = $generator->generateString(32, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

	 		$email = $_POST['email'];

	 	// Verif si email existe dans la BDD
	 		if ($userManager->emailExists($email)) {

					$user = $userManager->getUserByUsernameOrEmail($email);

					$userManager->update(array("token"=>$token),$user['id']);
				
				// Envois du mail	
					$mail = new \PHPMailer;

					$mail->isSMTP();
					$mail->setLanguage('fr');
					$mail->CharSet = 'UTF-8';

					$mail->SMTPDebug = 2;	//0 pour désactiver les infos de débug
					$mail->Debugoutput = 'html';

					$mail->Host = 'smtp.gmail.com';
					$mail->Port = 587;
					$mail->SMTPSecure = 'tls';
					$mail->SMTPAuth = true;
					$mail->Username = "thejma666@gmail.com";
					$mail->Password = "poiuytreza321654987";

					$mail->setFrom('ServiceMessagerie@BDloc', 'Service de Messagerie BDloc');
					$mail->addAddress($email, $user['username']);

					$mail->isHTML(true); 

					$mail->Subject = 'Envoyé par PHP !';

					$app = getApp();
    				$router = $app->getRouter();
    				$url = $router->generate("resetMotdepasse", array("token"=>$token));

					$mail->Body = 'Nous avons bien reçu votre demande de renouvellement de mot de passe <br>
						pour changer votre mot de passe <a href="http://www.bdloc.dev'.$url.'">Cliquer ici</a>';

				// SI email est bien envoyer
					if (!$mail->send()) {
						echo "Mailer Error: " . $mail->ErrorInfo;
					} else {
						echo "Message sent!";
					}
					$_SESSION['mail_succes'] = "Le mail a bien été Envoyé !";
					$this->redirectToRoute('oublieMotdepasse');

				}
				else {
					$error = "Adress Email non trouver !";
				}
		}

		$data = [];
		$data['succes'] = $succes;
		$data['error'] = $error;

		$this->show('user/forgotPassword', $data);
	}

/*==================PAGE RESET PASSWORD===================*/
	public function resetPassword($token)
	{
		$userManager = new UserManager();
		$succes = "";
		$error = "";
	// On verif si le token de URL est bien celui de la BDD pour trouver le user
		$foundUser = $userManager->getToken($token);
	// Si user pas trouver =  retour sur la home su site 
		if (empty($foundUser)) {
			$this->redirectToRoute('home');
			//die();
		}

	// Confirmation du Form de reset MDP
		if (!empty($_POST)) {
			$password = trim($_POST['password']);
			$password_confirm = trim($_POST['password_confirm']);

			if (empty($password)) {
				$error = "Veuilliez renseigner votre Mots de passe !";
			}
			elseif ($password !== $password_confirm) {
				$error = "Vos mots de passe ne conrresponde pas !";
			}
			else {	
				$containsLetter = preg_match('/[a-zA-Z]/', $password);		
				$containsDigit = preg_match('/\d/', $password);
				
				if (!$containsLetter || !$containsDigit) {
					$error = "Veulliez choisir un mot de passe avec au moin une lettre,  et un chiffre !";
				}
			}		
			if (empty($password_confirm)) {
				$error = "Veuilliez confirmer votre Mots de passe !";
			}
			if (empty($error)) {
	
			//insérer en base
				$hash = password_hash($password, PASSWORD_DEFAULT);
				
				$id = $foundUser['id'];

				$newPassword = [
				"password" => $hash,
				];
	
				$userManager = new \Manager\UserManager();
				$userManager->update($newPassword, $id);	
				$this->redirectToRoute('connexion');
	
				$succes = "Votre Mots de passe a bien été changer !";
				
			}

		}
		$data = [];
		$data['succes'] = $succes;
		$data['error'] = $error;

		$this->show('user/reset_password', $data);
	}


/*==================FAKE DATA===================*/
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
/*==================PAGE PROFIL===================*/
	public function profil()
	{
		$userManager = new UserManager();
		$error = "";
		$id = "";
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
			$user = $this->getUser();
			$id = $user["id"];
			$email = trim(strip_tags($_POST['email']));
			$username = trim(strip_tags($_POST['username']));
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
				$error = "Vous devez habiter Paris pour vous inscrire à notre service !";
			}

			// Téléphone valide
			if(preg_match("/^[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/", $phonenumber)) {
  				// $phonenumber is valid
				$error = "Votre numéro de téléphone n'est pas valide !";
			}
		//	2er cihffre du Telephone coresponde a 01,02,03,04,05,06,07,08 ou 09 
			if(substr($phonenumber, 0,2) < "01" || substr($phonenumber, 0,2) > "09") {
				$error = "Votre numéro de téléphone n'est pas valide !";
			}

			//si valide...
			if(empty($error))
			{
		//insérer en base

				$modifySubscriber = [
				"username" 		=> $username,
				"email" 		=> $email,
				"firstname" 	=> $firstname,
				"lastname" 		=> $lastname,
				"zip_code" 		=> $zipcode,
				"street_number" => $streetnumber,
				"street_name" 	=> $streetname,
				"phone_number" 	=> $phonenumber,
				"date_modified" => date("Y-m-d H:i:s"),
				];
				$userManager = new \Manager\UserManager();
				$userManager->update($modifySubscriber, $id);

				//Crée une instance et refresh le contenu
				$am = new AuthentificationManager();
				$am->refreshUser();
			}	


		}

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
		
		$this->show('user/profile', $data);
	}

/*==================PAGE REGISTER===================*/
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
				$error = "Vous devez habiter Paris pour vous inscrire à notre service !";
			}
		// Téléphone valide
			if(preg_match("/^[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/", $phonenumber)) {
  				// $phonenumber is valid
				$error = "Votre numéro de téléphone n'est pas valide !";
			}
		//	2er cihffre du Telephone coresponde a 01,02,03,04,05,06,07,08 ou 09 
			if(substr($phonenumber, 0,2) < "01" || substr($phonenumber, 0,2) > "09") {
				$error = "Votre numéro de téléphone n'est pas valide !";
			}
		// verif du MDP -- il doit contenir au moin 1 lettre et 1 chiffre !
			else {
				$containsLetter = preg_match('/[a-zA-Z]/', $password);
				$containsDigit = preg_match('/\d/', $password);

				if (!$containsLetter || !$containsDigit ) {
					$error = "Merci de choisir un mot de passe comportant au moins une lettre et un chiffre !";
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

				$this->redirectToRoute('catalogue');
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

/*==================PAGE LOGIN===================*/
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
				$this->redirectToRoute('catalogue');
			}
			else 
			{
				$error = "Mauvais Identifiants !";
			}
		}
		$data = [];
		$data['error'] = $error;
		$data['username'] = $username;
		// Afficher la page 
		$this->show('user/login',$data);
	}

	public function logout()
	{
		$am = new AuthentificationManager();
		$am->logUserOut();
		$this->redirectToRoute('home');
	}

	public function changePassword()
	{
		$this->show('user/change_password');
	}

}