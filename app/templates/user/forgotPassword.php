<?php $this->layout('layout_bdloc_home', ['title' => 'Entrer votre adresse Mail !']) ?>

<?php $this->start('main_content') ?>

		<h2 class="forgot-password-title">Mots de passe oublié ?</h2>
		<p class="forgot-password-text"><i class="fa fa-exclamation-circle"></i> Entrer votre Email pour recevoir un lien et changer votre mot de passe</p>
	<form class="forgot-password" method="POST" action="">
		<input class="mail-forgot-password" type="email" placeholder="Votre Email" name="email" autocomplete="off">
			<div class="message">
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
		</div>
		<input type="submit" class="sendmail" value="Envoyer">
	<form>

<?php $this->stop('main_content') ?>