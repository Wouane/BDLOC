<?php $this->layout('layout_bdloc', ['title' => 'Mot de passe']) ?>

<?php $this->start('main_content'); ?>

<h2 class="change-password-title">Modifiez votre mot de passe</h2>
<form method="POST" class="change-password">
			<div class="change-pswd">
				<label for="old_password">Ancien mot de passe</label>
				<input type="password" name="old_password" id="old_password" />
			</div>
			<div class="change-pswd">
				<label for="password">Nouveau mot de passe</label>
				<input type="password" name="password" id="password">
			</div>
			<div class="change-pswd">
				<label for="password_confirm">Confirmation mot de passe</label>
				<input type="password" name="password_confirm" id="password_confirm">
			</div>
			<div><?php echo $error; ?></div>
			<div><?php echo $succes;?></div>

			<input class="validate-change-pswd" type="submit" value="Sauvegarder">
	</form>

<?php $this->stop('main_content'); ?>