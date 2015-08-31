<?php $this->layout('layout_bdloc_home', ['title' => 'Bienvenue sur la page Inscription !']) ?>

<?php $this->start('main_content') ?>
<h1>Inscription</h1>
	<h2>Inscrivez-vous</h2>
		<form method="POST" name="register" id="register">
			<fieldset>
				<legend>Identifiant</legend>
				<div class="form-group">
					<label for="email">Votre Email : </label>
					<input name='email' type="email" class="form-control" id="email" value="<?= $email ?>">
				</div>
				<div class="form-group">
					<label for="username">Choisissez un Pseudo : </label>
					<input name='username' type="text" class="form-control" id="username" value="<?= $username ?>">
				</div>
				<div class="form-group">
					<label for="firstname">Prénom : </label>
					<input name='firstname' type="text" class="form-control" id="firstname" value="<?= $firstname ?>">
				</div>
				<div class="form-group">
					<label for="lastname">Nom : </label>
					<input name='lastname' type="text" class="form-control" id="lastname" value="<?= $lastname ?>">
				</div>
			</fieldset>

			<fieldset>
				<legend>Adresse postale</legend>
				<div class="form-group">
					<label for="streetnumber">Numéro : </label>
					<input name='streetnumber' type="text" class="form-control" id="streetnumber" value="<?= $streetnumber ?>">
				</div>
				<div class="form-group">
					<label for="streetname">Adresse : </label>
					<input name='streetname' type="text" class="form-control" id="streetname" value="<?= $streetname ?>">
				</div>
				<div class="form-group">
					<label for="zipcode">Code Postal : </label>
					<input name='zipcode' type="text" class="form-control" id="zipcode" value="<?= $zipcode ?>">
				</div>
				<div class="form-group">
					<label for="phonenumber">N° Mobile ou Fixe : </label>
					<input name='phonenumber' type="text" class="form-control" id="phonenumber" value="<?= $phonenumber ?>">
				</div>
			</fieldset>	

			<fieldset>
				<legend>Mot de passe</legend>		
				<div class="form-group">
					<label for="password">Votre mot de passe : </label>
					<input name='password' type="password" class="form-control" id="password" value="">
				</div>
				<div class="form-group">
					<label for="confirm">Confirmer votre mot de passe : </label>
					<input type="password" class="form-control" id="confirm" name="confirm" value="">
				</div>
			</fieldset>

			 <button type="submit" class="btn btn-default">Valider</button>
		  <div class="warning"><?php echo $error; ?></div>
		</form>		
	
<?php $this->stop('main_content') ?>