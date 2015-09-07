<?php $this->layout('layout_bdloc', ['title' => 'Contactez-nous']) ?>

<?php $this->start('main_content'); ?>
<h2 class="contact-title">Page Contact</h2>
<form method="POST" class="contact">
<p class="contact-text"><i class="fa fa-exclamation-circle"></i> Ecrivez nous !</p>
	<div class="form-group">
		<label for="name">NOM COMPLET <sup><i class="fa fa-asterisk"></i></sup></label>
		<input type="text" id="nom" name="name" placeholder="Nom">
	</div>

	<div class="form-group">
		<label for="email">EMAIL <sup><i class="fa fa-asterisk"></i></sup></label>
		<input type="email" id="email" name="email" placeholder="Email">
	</div>

	<div class="form-group">
		<label for="subject">OBJET <sup><i class="fa fa-asterisk"></i></sup></label>
		<input type="text" id="subject" name="subject"  placeholder="Objet">
	</div> 

	<div class="form-group">
		<label for="Message">MESSAGE <sup><i class="fa fa-asterisk"></i></sup></label>
		<textarea id="message" name="message"  placeholder="Votre texte"></textarea>
	</div>

	<div class="obligatoires">
		<p><sup><i class="fa fa-asterisk"></sup></i> Champs obligatoires</p>
	</div>	

	<input type="submit" class="validate-contact"value="Envoyer">
	<div><?php echo $result; ?></div>
</form>

<?php $this->stop('main_content'); ?>