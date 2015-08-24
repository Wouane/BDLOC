<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/catalogue/', 'Default#catalogue', 'catalogue'],
		['GET|POST', '/inscription/', 'User#register', 'inscription'],
		['GET|POST', '/connexion/', 'User#login', 'login'],
	);