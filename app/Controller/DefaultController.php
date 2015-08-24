<?php

namespace Controller;

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

	public function catalogue()
	{
		$this->show('default/catalogue');
	}

}