<?php
	// merci de ne pas toucher au fichier routes sans accord du PATRON :D :p 
	$w_routes = array(

		// ================================================================================================
		// --------------------------PUBLIC / USER --------------------------------------------------------
		// ================================================================================================

		//accueil de l'admin --------------------------------------------------------------------------
		['GET', '/', 'Default#home', 'home'],

		//Inscription de l'utilisateur ----------------------------------------------------------------
		['GET|POST', '/inscription/', 'User#register', 'inscription'],

		//Connexion de l'utilisateur ------------------------------------------------------------------	
		['GET|POST', '/connexion/', 'User#login', 'connexion'],

		//Page de Mot de passe oublié -----------------------------------------------------------------
		['GET|POST', '/connexion/mot-de-passe-oublie/', 'User#forgotPassword', 'oublieMotdepasse'],

		//Paramètres du profil de l'utilisateur -------------------------------------------------------
		['GET|POST', '/catalogue/profil/parametres', 'User#parameters', 'parametres'],

		//Page catalogue-------------------------------------------------------------------------------
		['GET|POST', '/catalogue/', 'Default#catalogue', 'catalogue'],

		//Page panier de l'utilisateur ----------------------------------------------------------------
		['GET|POST', '/catalogue/panier/', 'User#cart', 'panier'],

		//Page contact de l'utilisateur-----------------------------------------------------------------
		['GET|POST', '/catalogue/contact/', 'User#contact', 'contact'],

		//Page profil de l'utilisateur-----------------------------------------------------------------
		['GET|POST', '/catalogue/profil/', 'User#profil', 'profile'],

		//Page déconnexion de l'utilisateur -----------------------------------------------------------	
		['GET', '/deconnexion/', 'User#logout', 'deconnexion'],

	// ================================================================================================
	// --------------------------PRIVATE / ADMIN ------------------------------------------------------
	// ================================================================================================

		// Creer un nouvel administrateur -------------------------------------------------------------
		['GET|POST', '/admin/admin-control/inscription/', 'Admin#register', 'register_admin'],

		// Panneau de controle ------------------------------------------------------------------------
		['GET|POST', '/admin/control-pannel/', 'Admin#control', 'control_admin'],

		// connexion login ----------------------------------------------------------------------------
		['GET|POST', '/admin/connexion/', 'Admin#login', 'connexion_admin'],

		//Déconnexion----------------------------------------------------------------------------------
		['GET', '/admin/deconnexion/', 'Admin#logout', 'deconnexion_admin'],

		//---------------------------------------------------------------------------------------------	

	);