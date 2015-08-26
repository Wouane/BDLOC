<?php $this->layout('layout_bdloc_nomenu', ['title' => 'Entrer votre adresse Mail !']) ?>

<?php $this->start('main_content') ?>

<form method="POST" action="">
		<h2>Mots de passe Oublier ?</h2>
		<p class="forget-text">Entrer votre adresse Email pour recevoir un mail et changer votre mots de passe</p>
		<input type="text" placeholder="Entrer votre adresse Mail" name="email">
		<div class="succes">
			<?php 
				if (!empty($_SESSION['mail_succes'])) {
					
					echo $_SESSION['mail_succes'];
					
					unset($_SESSION['mail_succes']);
				}
			 ?>
		</div>
		<div class="error">
			<?php 
				echo $error; 
			?>
		</div>
		<button type="submit">Envoyer</button>
	</form>

<?php $this->stop('main_content') ?>