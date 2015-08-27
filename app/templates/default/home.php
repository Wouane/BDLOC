<?php $this->layout('layout_bdloc_home', ['title' => 'Bienvenue sur la page Accueil !']) ?>
<?php $this->start('main_content') ?>
	<div class="main-home">
		<div class="login"><?php $this->insert('user/login_insert',['username'=>'','error'=>'']) ?></div>		
		<div class="slider"><img src="<?= $this->assetUrl('img/slider/roy-lichtenstein_00249251.jpg') ?>"/></div>
		<div class="maintop">
			<div class="subscribe">
				<a href="<?= $this->url('inscription') ?>" title="Abonnement">Abonnez-vous</br> à BDLOC</a>
			</div>
			<div class="homewords">
			BDLOC est un site de location de Bande dessinés
				réservé aux Parisiens			
			</div>
		</div>
	</div>
<?php $this->stop('main_content') ?>
