<?php $this->layout('layout_bdloc', ['title' => 'Entrer votre adresse Mail !']) ?>

<?php $this->start('main_content') ?>

<form method="POST">
	<input type="text">
	<button type="submit">Envoyer</button>
</form>

<?php $this->stop('main_content') ?>