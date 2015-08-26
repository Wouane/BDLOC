<?php $this->layout('layout_bdloc', ['title' => 'Profil']) ?>

<?php $this->start('main_content'); ?>

	<form method="POST" enctype="multipart/form-data">
		
	<div class="form-modify">
		<label for="picture">Modifiez votre image :</label>
		<input type="file" name="picture" id="picture" />
	</div>

	<h1>Modifiez les informations générales</h1>
	
	<div class="form-modify">
		<label for="email">Email</label>
		<input name="email" type="email" class="form_modify" value="<?= $w_user['email']; ?>">
	</div>

	<div class="form-modify">
		<label for="username">Pseudo</label>
		<input name="username" type="text" class="form_modify" value="<?= $w_user['username']; ?>">
	</div>

	<div class="form-modify">
		<label for="firstname">Prénom</label>
		<input name="firstname"type="text" id="firstname" class="form_modify" value="<?= $w_user['firstname']; ?>">
	</div>

	<div class="form-modify">
		<label for="lastname">Nom</label>
		<input name="lastname" type="text" id="lastname" class="form_modify" value="<?= $w_user['lastname']; ?>">
	</div>
		
	<div class="form-modify">
		<label for="streetnumber">Numéro</label>
		<input name="streetnumber" type="text" id="streetnumber" class="form_modify" value="<?= $w_user['street_number']; ?>">

	<div class="form-modify">
		<label for="streetname">Adresse</label>
		<input name="streetname" type="text" id="streetname" class="form_modify" value="<?= $w_user['street_name']; ?>">
	</div>

	<div class="form-modify">
		<label for="zipcode">Code postal</label>
		<input name="zipcode" type="text" id="zipcode" class="form_modify" value="<?= $w_user['zip_code']; ?>">
	</div>

	<div class="form-modify">
		<label for="phonenumber">N° Mobile ou Fixe</label>
		<input name="phonenumber" type="text" id="phonenumber" class="form_modify" value="<?= $w_user['phone_number']; ?>">
	</div>

	<button type="submit" class="btn btn-modify">Valider</button>
	<div><?= $error; ?></div>

	</form>

<?php $this->stop('main_content'); ?>