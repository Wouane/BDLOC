<?php $this->layout('layout_bdloc_home', ['title' => 'Bienvenue sur la page Inscription !']) ?>

<?php $this->start('main_content') ?>

	<h2 class="register-title">Inscrivez-vous !</h2>
		<form class="register-profile" method="POST" name="register" id="register">
			<h3 class="titre-section"><i class="fa fa-user"></i> Identifiants</h3>
				<br/>
				<!-- PRENOM -->
				<div class="form-group">
					<label for="firstname"> PRENOM <sup><i class="fa fa-asterisk"></i></sup></label>
					<input name='firstname' type="text" class="form-control" placeholder="Prenom" autocomplete="off" value="<?= $firstname ?>">
				</div>
				<!-- NOM -->
				<div class="form-group">
					<label for="lastname" > NOM <sup><i class="fa fa-asterisk"></i></sup></label>
					<input name='lastname' type="text" class="form-control" id="lastname" placeholder="Nom" value="<?= $lastname ?>">
				</div>
				<!-- PSEUDO -->
				<div class="form-group">
					<label for="username"> PSEUDO <sup><i class="fa fa-asterisk"></i></sup></label>
					<input name='username' type="text" class="form-control" placeholder="Pseudo" value="<?= $username ?>">
				</div>
				<!-- EMAIL -->
				<div class="form-group">
					<label for="email"> EMAIL <sup><i class="fa fa-asterisk"></i></sup></label>
					<input name='email' type="email" class="form-control" placeholder="Email" value="<?= $email ?>">
				</div>
				<br/>	
			<h3 class="titre-section"><i class="fa fa-home"></i> Adresse</h3>
				<br/>
				<!-- ADRESSE  -->
				<div class="form-group">
					<label for="streetname"> ADRESSE <sup><i class="fa fa-asterisk"></i></sup></label>
					<input name='streetname' type="text" class="form-control" placeholder="Adresse" value="<?= $streetname ?>">
				</div>
				<!-- ZIPCODE -->
				<div class="form-group">
					<label for="zipcode">	CODE POSTAL <sup><i class="fa fa-asterisk"></i></sup></label>
					<input name='zipcode' type="text" class="form-control" placeholder="Code postal" value="<?= $zipcode ?>">
				</div>
				<!--PHONE -->
				<br/>
			<h3 class="titre-section"><i class="fa fa-phone"></i> Numéro</h3>
				<br/>
				<div class="form-group">
					<label for="phonenumber"> TELEPHONE <sup><i class="fa fa-asterisk"></i></sup></label>
					<input name='phonenumber' type="text" class="form-control" placeholder="Telephone" value="<?= $phonenumber ?>">
				</div>
				<br/>	
			<h3 class="titre-section"><i class="fa fa-phone"></i> Mot de Passe</h3>
				<br/>
				<!-- MOT DE PASSE -->
				<div class="form-group">
					<label for="password"> VOTRE MOT DE PASSE <sup><i class="fa fa-asterisk"></i></sup></label>
					<input name='password' type="password" class="form-control" id="password" placeholder="Mot de passe" value="">
				</div>
				<!-- CONFIRMATION -->
				<div class="form-group">
					<label for="confirm">CONFIRMATION <sup><i class="fa fa-asterisk"></i></sup></label>
					<input type="password" class="form-control" id="confirm" name="confirm" placeholder="Confirmation" value="">
				</div>
				<p class="obligatoires">Champs Obligatoires <sup><i class="fa fa-asterisk"></i></sup></p>
				<input type="submit" class="validate-register" value="Valider">
		  		<div class="warning"><?php echo $error; ?></div>
		</form>		
	
<?php $this->stop('main_content') ?>