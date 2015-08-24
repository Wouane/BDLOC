<?php
	
	$w_routes = array(
		// --------------------------PUBLIC / USER ------------------------------------
		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/catalogue/', 'Default#catalogue', 'catalogue'],
		['GET|POST', '/user/', 'User#register', 'inscription'],
		['GET|POST', '/user/', 'User#login', 'login'],
		['GET|POST', '/user/', 'User#login', 'login'],


		// --------------------------PRIVATE / ADMIN ------------------------------------
	);