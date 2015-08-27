<?php $this->layout('layout_bdloc', ['title' => 'Profil']) ?>

<?php $this->start('main_content'); ?>

	<h1>Hello <?= $w_user['username']; ?> ! Vous allez modifier vos informations</h1>
	<form method="POST" enctype="multipart/form-data">
	<fieldset>
		<legend>Identifiant</legend>
		<div class="form-modify">
			<label for="picture">Modifiez votre image :</label>
			<input type="file" name="pic_name" id="pic_name"/>
		</div>

		<div class="form-modify">
			<label for="firstname"><i class="fa fa-street-view"></i> Prénom</label>
			<input name="firstname" type="text" id="firstname" class="form_modify" value="<?= $w_user['firstname']; ?>">
		</div>

		<div class="form-modify">
			<label for="lastname"><i class="fa fa-street-view"></i> Nom</label>
			<input name="lastname" type="text" id="lastname" class="form_modify" value="<?= $w_user['lastname']; ?>">
		</div>

		<div class="form-modify">
			<label for="email"><i class="fa fa-envelope-o"></i> Email</label>
			<input name="email" type="email" class="form_modify" value="<?= $w_user['email']; ?>">
		</div>

		<div class="form-modify">
			<label for="username"><i class="fa fa-user"></i> Pseudo</label>
			<input name="username" type="text" class="form_modify" value="<?= $w_user['username']; ?>">
		</div>
	</fieldset>

	<fieldset>
		<legend>Adresse postale</legend>
		<div class="form-modify">
			<label for="streetnumber"><i class="fa fa-home"></i> Numéro</label>
			<input name="streetnumber" type="text" id="streetnumber" class="form_modify" value="<?= $w_user['street_number']; ?>">

			<div class="form-modify">
				<label for="streetname"><i class="fa fa-home"></i> Rue</label>
				<input name="streetname" type="text" id="streetname" class="form_modify" value="<?= $w_user['street_name']; ?>">
			</div>

			<div class="form-modify">
				<label for="zipcode"><i class="fa fa-home"></i> Code postal</label>
				<input name="zipcode" type="text" id="zipcode" class="form_modify" value="<?= $w_user['zip_code']; ?>">
			</div>
	</fieldset>

	<fieldset>
		<legend>Numéro de téléphone</legend>
		<div class="form-modify">
			<label for="phonenumber"><i class="fa fa-mobile"></i> N° Mobile ou Fixe</label>
			<input name="phonenumber" type="text" id="phonenumber" class="form_modify" value="<?= $w_user['phone_number']; ?>">
		</div>
	</fieldset>

	<a href="<?= $this->url('changeMotdepasse'); ?>" title="password" >Modifier son mot de passe</a>
	<button type="submit" class="btn btn-modify">Valider</button>
	<div><?= $error; ?></div>
	</fieldset>
	</form>

<?php $this->stop('main_content'); ?>