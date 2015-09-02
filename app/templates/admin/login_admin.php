<?php $this->layout('layout_admin', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>



<form method="POST" name="connexion_admin" id="connexion_admin">

		<div class="form_admin">
			<label for="username"> Pseudo : </label>
			<input  type="text"  id="username" name='username' placeholder="Pseudo">
		</div>
		<div class="form_admin">
			<label for="password">Votre mot de passe : </label>
			<input type="password" id="password" name='password' placeholder="Mot de passe" >
		</div>
		<div>
			<?php echo $error; ?>
		</div>
		<button type="submit" class="btn_admin_connexion">Valider</button>


</form>


<?php $this->stop('main_content') ?>