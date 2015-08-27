	<h2>Connectez-vous</h2>
		<form method="POST" name="register" id="register" novalidate action="<?= $this->url('connexion') ?>">
			<div class="form-group">
			    <label for="username"></label>
			    <input name='username' type="text" class="form-control" id="username" value="<?= $username ?>" placeholder="Votre Pseudo ">
			</div>
			<div class="form-group">
			    <label for="password"></label>
			    <input name='password' type="password" class="form-control" id="password" value="" placeholder="Votre mot de passe">
			</div>
		  <button type="submit" class="btn btn-default">Valider</button>
		  <div class="warning"><?php echo $error; ?></div>
		  <div class="btn-forgot"><a href="<?= $this->url('oublieMotdepasse') ?>">Mot de passe oublié ?</a></div>
		</form>