<?php $this->layout('layout_bdloc', ['title' => 'Entrer votre adresse Mail !']) ?>

<?php $this->start('main_content') ?>

<form method="POST" action="">
		<h2>Mots de passe Oublier ?</h2>
		<p class="forget-text">Entrer votre adresse Email pour recevoir un mail et changer votre mots de passe</p>
		<input type="text" placeholder="Entrer votre adresse Mail" name="email">
		<div class="error">
			<?php 
				//echo $error;
			 ?>
		</div>
		<div class="succes">
			<?php 
				//echo $succes;
			 ?>
		</div>
		<button type="submit">Envoyer</button>
	</form>

<?php $this->stop('main_content') ?>