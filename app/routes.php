<?php
	// merci de ne pas toucher au fichier routes sans accord du PATRON :D :p 
	$w_routes = array(

		// ================================================================================================
		// --------------------------PUBLIC / USER --------------------------------------------------------
		// ================================================================================================



		//accueil de l'admin --------------------------------------------------------------------------
		['GET', '/', 'Default#home', 'home'],

		//INSCRIPTION de l'utilisateur ----------------------------------------------------------------
		['GET|POST', '/inscription/', 'User#register', 'inscription'],

		//CONNEXION de l'utilisateur ------------------------------------------------------------------	
		['GET|POST', '/connexion/', 'User#login', 'connexion'],

		//Page de Mot de passe oublié -----------------------------------------------------------------
		['GET|POST', '/connexion/mot-de-passe-oublie/', 'User#forgotPassword', 'oublieMotdepasse'],
		//Page de changement de mot de passe depuis Profil-----------------------------------------------------------	
		['GET|POST', '/change-mot-de-passe/', 'User#changePassword', 'changeMotdepasse'],

		//Page de CHANGEMENT DE MOT DE PASSE après avoir recu un mail-----------------------------------------------------------	
		['GET|POST', '/reinitialisation-mot-de-passe/[:token]/', 'User#resetPassword', 'resetMotdepasse'],

		//Parametre du PROFIL de l'utilisateur -------------------------------------------------------
		['GET|POST', '/catalogue/profil/parametres/', 'User#parameters', 'parametres'],

		//Page CATALOGUE------------------------------------------------------------------------------
		['GET|POST', '/catalogue/', 'Book#catalogue', 'catalogue'],

		//Page DETAILS-------------------------------------------------------------------------------
		['GET', '/catalogue/details/[i:id]/', 'Book#details', 'details'],

		//Page RECHERCHER search.js-------------------------------------------------------------------------------
		['GET|POST', '/recherche/', 'Book#search', 'search'],

		//Page PANIER de l'utilisateur ----------------------------------------------------------------
		['GET|POST', '/catalogue/panier/', 'Default#cart', 'panier'],

		//Page CONTACT de l'utilisateur-----------------------------------------------------------------
		['GET|POST', '/catalogue/contact/', 'Default#contact', 'contact'],

		//Page PROFIL de l'utilisateur-----------------------------------------------------------------
		['GET|POST', '/catalogue/profil/', 'User#profil', 'profile'],

		//Page DELETEPROFILE de l'utilisateur-----------------------------------------------------------------
		['GET|POST', '/catalogue/profil/deleteprofile/[i:id]/', 'User#deleteProfile', 'deleteProfile'],

		//Page déconnexion de l'utilisateur -----------------------------------------------------------	
		['GET', '/deconnexion/', 'User#logout', 'deconnexion'],

		//FAKE DATA----------------------------------------------------------------------------------
		['GET|POST', '/inscription/fakedata/', 'User#Fakedata', 'fake_data'],

		//Page MENTIONS LEGALES ----------------------------------------------------------------
		['GET', '/catalogue/mentions-legales/', 'Default#credits', 'mentionsLegales'],

	// ================================================================================================
	// --------------------------PRIVATE / ADMIN ------------------------------------------------------
	// ================================================================================================

		// Creer un nouvel administrateur -------------------------------------------------------------
		['GET|POST', '/admin/admin-control/inscription/', 'Admin#register_admin', 'register_admin'],

		// Panneau de controle ------------------------------------------------------------------------
		['GET|POST', '/admin/control-pannel/', 'Admin#control', 'control_admin'],

		// connexion login ----------------------------------------------------------------------------
		['GET|POST', '/admin/connexion/', 'Admin#login_admin', 'connexion_admin'],

		//Déconnexion----------------------------------------------------------------------------------
		['GET', '/admin/deconnexion/', 'Admin#logout', 'deconnexion_admin'],
		
		//---------------------------------------------------------------------------------------------	

	);