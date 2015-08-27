	<h2>Connectez-vous</h2>
		<form method="POST" name="register" id="register" novalidate action="<?= $this->url('connexion') ?>">
			<div class="form-group">
			    <label for="username">Votre Pseudo</label>
			    <input name='username' type="text" class="form-control" id="username" value="<?= $username ?>">
			</div>
			<div class="form-group">
			    <label for="password">Votre mot de passe</label>
			    <input name='password' type="password" class="form-control" id="password" value="">
			</div>
		  <button type="submit" class="btn btn-default">Valider</button>
		  <div class="warning"><?php echo $error; ?></div>
		  <div class=""><a href="<?= $this->url('oublieMotdepasse') ?>">Mot de passe oublié ?</a></div>
		</form>