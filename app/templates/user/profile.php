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
		<input name="email" type="email" class="form_modify">
	</div>

	<div class="form-modify">
		<label for="username">Pseudo</label>
		<input name="username" type="text" class="form_modify">
	</div>

	<div class="form-modify">
		<label for ="name">Nom</label>
		<input name="name" type="text" id="name" class="form_modify">
	</div>

	<div class="form-modify">
		<label for="firstname">Prénom</label>
		<input name="firstname"type="text" id="firstname" class="form_modify">
	</div>

	<div class="form-modify">
		<label for="zipcode">Code postal</label>
		<input name="zipcode" type="text" id="zipcode" class="form_modify">
	</div>
		
	<div class="form-modify">
		<label for="streetnumber">Numéro</label>
		<input name="streetnumber" type="text" id="streetnumber" class="form_modify">

	<div class="form-modify">
		<label for="adress">Adresse</label>
		<input name="adress" type="text" id="adress" class="form_modify">
	</div>

	<button type="submit" class="btn btn-modify">Valider</button>

	</form>

<?php $this->stop('main_content'); ?>