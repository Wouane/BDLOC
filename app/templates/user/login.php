<?php $this->layout('layout_bdloc', ['title' => 'Bienvenue sur la Page de Login !']) ?>

<?php $this->start('main_content') ?>

	<h2>Connectez-vous</h2>
		<form method="POST" name="register" id="register" novalidate>
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
		</form>	
<?php $this->stop('main_content') ?>