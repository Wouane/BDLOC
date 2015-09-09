<?php $this->layout('layout_admin', ['title' => 'Inscription | Administrateur']) ?>

<?php $this->start('main_content') ?>

<form method="POST" name="register_admin" id="register_admin">
	

	<fieldset>	
		<div class="form_admin">
			<label for="email">Email : </label>
			<input  type="email" class="input" id="email" name="email" placeholder="Email">
		</div>
		<div class="form_admin">
			<label for="username">Choisissez un Pseudo : </label>
			<input  type="text"  class="input" id="username" name='username' placeholder="Pseudo">
		</div>
		<div class="form_admin">
			<label for="password">Votre mot de passe : </label>
			<input type="password" class="input" id="password" name='password' placeholder="Mot de passe">
		</div>
		<div class="form_admin">
			<label for="password_confirm">Confirmer votre mot de passe : </label>
			<input type="password"  class="input" id="password_confirm" name="password_confirm" placeholder="Confirmation">
		</div>
		<div class="error_admin">
			<?php echo $error; ?>
		</div>
		<button type="submit" class="btn_admin">Valider</button>

	</fieldset>

</form>

<?php $this->stop('main_content') ?>