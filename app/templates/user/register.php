<?php $this->layout('layout_bdloc_home', ['title' => 'Bienvenue sur la page Inscription !']) ?>

<?php $this->start('main_content') ?>

	<h2>Inscrivez-vous</h2>
		<form method="POST" name="register" id="register">
			<h3 class="titre-section"><i class="fa fa-user"></i> Identifiants</h3>
				<br/>
				<!-- NOM -->
				<div class="form-group">
					<label for="lastname" >NOM</label>
					<input name='lastname' type="text" class="form-control" id="lastname" value="<?= $lastname ?>">
				</div>
				<!-- PRENOM -->
				<div class="form-group">
					<label for="firstname">Prénom : </label>
					<input name='firstname' type="text" class="form-control" id="firstname" value="<?= $firstname ?>">
				</div>
				<!-- PSEUDO -->
				<div class="form-group">
					<label for="username">Choisissez un Pseudo : </label>
					<input name='username' type="text" class="form-control" id="username" value="<?= $username ?>">
				</div>
				<!-- EMAIL -->
				<div class="form-group">
					<label for="email">Votre Email : </label>
					<input name='email' type="email" class="form-control" id="email" value="<?= $email ?>">
				</div>
				<br/>	
			<h3 class="titre-section"><i class="fa fa-home"></i> Adresse</h3>
				<br/>
				<!-- ADRESSE  -->
				<div class="form-group">
					<label for="streetname"> ADRESSE</label>
					<input name='streetname' type="text" class="form-control" id="streetname" value="<?= $streetname ?>">
				</div>
				<!-- ZIPCODE -->
				<div class="form-group">
					<label for="zipcode">	CODE POSTAL</label>
					<input name='zipcode' type="text" class="form-control" id="zipcode" value="<?= $zipcode ?>">
				</div>
				<!--PHONE -->
				<br/>
			<h3 class="titre-section"><i class="fa fa-phone"></i> Numéro</h3>
				<br/>
				<div class="form-group">
					<label for="phonenumber"> TELEPHONE</label>
					<input name='phonenumber' type="text" class="form-control" id="phonenumber" value="<?= $phonenumber ?>">
				</div>
				<br/>	
			<h3 class="titre-section"><i class="fa fa-phone"></i> Mot de Passe</h3>
				<br/>
				<!-- MOT DE PASSE -->
				<div class="form-group">
					<label for="password">VOTRE MOT DE PASSE </label>
					<input name='password' type="password" class="form-control" id="password" value="">
				</div>
				<!-- CONFIRMATION -->
				<div class="form-group">
					<label for="confirm">CONFIRMER VOTRE MOT DE PASSE </label>
					<input type="password" class="form-control" id="confirm" name="confirm" value="">
				</div>
				<input type="submit" class="btn btn-default" value="Valider">
		  		<div class="warning"><?php echo $error; ?></div>
		</form>		
	
<?php $this->stop('main_content') ?>