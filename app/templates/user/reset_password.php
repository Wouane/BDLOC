<?php $this->layout('layout_bdloc_home', ['title' => 'Mot de passe']) ?>

<?php $this->start('main_content'); ?>

<h2 class="reset-password-title">Modifiez votre mot de passe</h2>
<form method="POST" class="reset-password">
	<div class="form-reset">
		<label class="reset-password-label" for="password">NOUVEAU MOT DE PASSE</label>
		<input type="password" name="password" id="password" placeholder="Nouveau">
	</div>
	<div class="form-reset">
		<label class="reset-password-label" for="password_confirm">CONFIRMATION MOT DE PASSE</label>
		<input type="password" name="password_confirm" id="password_confirm" placeholder="Confirmation">
	</div>
	<div><?php echo $error; ?></div>
	<div><?php echo $succes; ?></div>
	<input class="btn-default" type="submit" value="Sauvegarder">
</form>

<?php $this->stop('main_content'); ?>