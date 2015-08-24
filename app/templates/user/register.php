<?php $this->layout('layout', ['title' => 'Inscription !']) ?>

<?php $this->start('main_content') ?>

	<h2>Inscrivez-vous</h2>
		<form method="POST" name="register" id="register">
			<div class="form-group">
			    <label for="email">Votre Email</label>
			    <input name='email' type="email" class="form-control" id="email" value="<?= $email ?>">
			</div>
			<div class="form-group">
			    <label for="username">Choisissez un Pseudo</label>
			    <input name='username' type="text" class="form-control" id="username" value="<?= $username ?>">
			</div>
			<div class="form-group">
			    <label for="firstname">Prénom</label>
			    <input name='firstname' type="text" class="form-control" id="firstname" value="<?= $firstname ?>">
			</div>
			<div class="form-group">
			    <label for="lastname">Nom</label>
			    <input name='lastname' type="text" class="form-control" id="lastname" value="<?= $lastname ?>">
			</div>
			<div class="form-group">
			    <label for="lastname">Code Postal</label>
			    <input name='lastname' type="text" class="form-control" id="lastname" value="<?= $lastname ?>">
			</div>
			<div class="form-group">
			    <label for="password">Votre mot de passe</label>
			    <input name='password' type="password" class="form-control" id="password" value="">
			</div>
			<div class="form-group">
				<label for="confirm">Confirmer votre mot de passe : </label>
				<input type="password" class="form-control" id="confirm" name="confirm" value="">
			</div>

		  <button type="submit" class="btn btn-default">Valider</button>
		  <div class="warning"><?php echo $error; ?></div>
		</form>
	
<?php $this->stop('main_content') ?>