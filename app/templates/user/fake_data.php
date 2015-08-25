<?php
	//http://stackoverflow.com/users/535020/tracking-the-script-execution-time-in-php
	//$time_start = microtime(true);
	//temps limite d'exécution : x secondes
	ini_set("max_execution_time", 200);
	require("../vendor/autoload.php");
	require("db.php");

	$users = 1000;

	//paamayim nekutotayim
	$faker = Faker\Factory::create("fr_FR");

	$dbh->query("TRUNCATE users;");

	$user_sql = "INSERT INTO users 
					(username, email, firstname, lastname, phone_number)
					VALUES (:username, :email, :firstname, :lastname, :phone_number)";	
	$user_sth = $dbh->prepare($user_sql);

	for($i=0; $i<$users; $i++){		
		$username = $faker->userName;
		$email = $faker->email;
		$lastname = $faker->firstname;
		$firstname = $faker->lastname;
		$phone_number = $faker->phoneNumber;
		$user_data = array($username,$email,$firstname,$lastname,$phoneNumber);
		$user_sth->bindValue(":username", $username);
		$user_sth->bindValue(":email", $email);
		$user_sth->bindValue(":firstname", $firstname);		
		$user_sth->bindValue(":lastname", $lastname);
		$user_sth->bindValue(":phoneNumber", $phoneNumber);
		
		$user_sth->execute();
		//print_r($user_data);
		}

	//$time_end = microtime(true);
	//dividing with 60 will give the execution time in minutes other wise seconds
	//$execution_time = ($time_end - $time_start);

	//execution time of the script
	//echo '<b>Total Execution Time:</b> '.$execution_time.' seconds';