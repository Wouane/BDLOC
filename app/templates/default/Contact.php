<?php $this->layout('layout_bdloc', ['title' => 'Contactez-nous']) ?>

<?php $this->start('main_content'); ?>

<form method="POST">
	<div>
		<label for="name">* Nom complet</label>
		<input type="text" id="nom" name="name">
	</div>

	<div>
		<label for="email">* Adresse email</label>
		<input type="email" id="email" name="email">
	</div>

	<div>
		<label for="subject">* Objet</label>
		<input type="text" id="subject" name="subject">
	</div> 

	<div>
		<label for="Message">* Message :</label>
		<textarea id="message" name="message"></textarea>
	</div>

	<div>
		<p>* Champs obligatoire</p>
	</div>	

	<input type="submit" value="Envoyer">
	<div><?php echo $result; ?></div>
</form>

<?php $this->stop('main_content'); ?>