
	<h2><i class="fa fa-user"></i> Connectez-vous</h2>

<div class="page-login">
	<h2>Connectez-vous</h2>

	<div class="closelog"></div>
		<form method="POST" name="login" class="form-content" id="login" novalidate action="<?= $this->url('connexion') ?>">
			<div class="form-group">
			    <label for="username"></label>
			    <input name='username' type="text" autocomplete="off" class="form-control" id="username" value="<?= $username ?>" placeholder="Pseudo ou Email">
			</div>
			<div class="form-group">
			    <label for="password"></label>
			    <input name='password' type="password" class="form-control" id="password" value=""  placeholder="Votre mot de passe">
			</div>
			<div class="warning">
				<?php 
					echo $error; 
				?>
			</div>
		  <button type="submit" class="btn btn-default">Valider</button>
		  
		  <div class="btn-forgot"><a href="<?= $this->url('oublieMotdepasse') ?>">Mot de passe oublié ?</a></div>
		</form>
</div>
