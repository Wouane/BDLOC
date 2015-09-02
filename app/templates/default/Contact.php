<?php $this->layout('layout_bdloc', ['title' => 'Contactez-nous']) ?>

<?php $this->start('main_content'); ?>

<h2 class="contact-title">CONTACT</h2>
<form method="POST" class="contact">
	<div class="form-group">
		<label for="name">NOM COMPLET <sup><i class="fa fa-asterisk"></i></sup></label>
		<input type="text" id="nom" name="name">
	</div>

	<div class="form-group">
		<label for="email">EMAIL <sup><i class="fa fa-asterisk"></i></sup></label>
		<input type="email" id="email" name="email">
	</div>

	<div class="form-group">
		<label for="subject">OBJET <sup><i class="fa fa-asterisk"></i></sup></label>
		<input type="text" id="subject" name="subject">
	</div> 

	<div class="form-group">
		<label for="Message">MESSAGE <sup><i class="fa fa-asterisk"></i></sup>
		</label>
		<textarea id="message" name="message"></textarea>
	</div>

	<div class="obligatoires">
		<p>* Champs obligatoire</p>
	</div>	

	<input type="submit" class="validate-contact"value="Envoyer">
	<div><?php echo $result; ?></div>
</form>

<?php $this->stop('main_content'); ?>