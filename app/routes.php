<?php
	// merci de ne pas toucher au fichier routes sans accord du PATRON :D :p 
	$w_routes = array(
	// --------------------------PUBLIC / USER ------------------------------------
		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/catalogue/', 'Default#catalogue', 'catalogue'],
		['GET|POST', '/inscription/', 'User#register', 'inscription'],
		['GET|POST', '/connexion/', 'User#login', 'connexion'],
	// --------------------------PRIVATE / ADMIN ------------------------------------

	);