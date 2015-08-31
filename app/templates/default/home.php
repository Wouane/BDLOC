<?php $this->layout('layout_bdloc_home', ['title' => 'Bienvenue sur la page Accueil !']) ?>
<?php $this->start('main_content') ?>
	<div class="main-home">
		<div class="login"><?php $this->insert('user/login_insert',['username'=>'','error'=>'']) ?></div>

		<div id="slider">
			<figure>
				<img src="<?= $this->assetUrl('img/slider/roy-lichtenstein_00249251.jpg') ?>" alt>
				<img src="<?= $this->assetUrl('img/slider/Moebius_003.jpg') ?>" alt>
				<img src="<?= $this->assetUrl('img/slider/Moebius_005.jpg') ?>" alt>
				<img src="<?= $this->assetUrl('img/slider/KABUKI_HC.jpg') ?>" alt>
				<img src="<?= $this->assetUrl('img/slider/roy-lichtenstein_00249251.jpg') ?>" alt>
			</figure>
		</div>

		<div class="maintop">
			<div class="subscribe">
				<a href="<?= $this->url('inscription') ?>" title="Abonnement">Abonnez-vous</br> à BDLOC</a>
			</div>
			<div class="homewords">
			...la Marie de Paris</br> a décidé de créer un nouveau système de location de BD, bdloc.fr,
			</br><span class="cent"> 100% en ligne,</span> </br><span class="cent">100% gratuit,</span> </br><span class="cent">100% moderne</span>
		</div>
	</div>
<?php $this->stop('main_content') ?>
