<?php $this->layout('layout_bdloc', ['title' => 'Mot de passe']) ?>

<?php $this->start('main_content'); ?>

<form method="POST">
		<h1>Modifiez votre mot de passe</h1>
			<div>
				<label for="old_password">Ancien mot de passe</label>
				<input type="password" name="old_password" id="old_password" />
			</div>

			<div>
				<label for="password">Nouveau mot de passe</label>
				<input type="password" name="password" id="password">
			</div>

			<div>
				<label for="password_confirm">Confirmation mot de passe</label>
				<input type="password" name="password_confirm" id="password_confirm">
			</div>

			<input type="submit" value="Sauvegarder">
	</form>

<?php $this->stop('main_content'); ?>