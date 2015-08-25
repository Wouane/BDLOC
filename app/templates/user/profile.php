<?php $this->layout('layout_bdloc', ['title' => 'Bdloc']) ?>

<?php $this->start('main_content'); ?>

<h1>Profil</h1>

<form method="POST" action="handle_profile.php" enctype="multipart/form-data">
		
		<label for="pic">Choisissez une image :</label>
		<input type="file" name="pic" id="pic" />
		
		<input type="submit" value="Envoyer !" />

	</form>




<?php $this->stop('main_content'); ?>