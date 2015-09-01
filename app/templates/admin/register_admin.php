<?php $this->layout('layout_admin', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<form method="POST" name="register_admin" id="register_admin">
	

	<fieldset>
		<legend>Enregistrez vous</legend>	
		<div class="form_admin">
			<label for="email">Email : </label>
			<input  type="email" id="email" name="email">
		</div>
		<div class="form_admin">
			<label for="username">Choisissez un Pseudo : </label>
			<input  type="text"  id="username" name='username'>
		</div>
		<div class="form_admin">
			<label for="password">Votre mot de passe : </label>
			<input type="password" id="password" name='password' >
		</div>
		<div class="form_admin">
			<label for="password_confirm">Confirmer votre mot de passe : </label>
			<input type="password"  id="password_confirm" name="password_confirm" >
		</div>
		<div class="error_admin">
			<?php echo $error; ?>
		</div>
		<button type="submit" class="btn_admin_register">Valider</button>

	</fieldset>

</form>

<?php $this->stop('main_content') ?>