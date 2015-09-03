<?php $this->layout('layout_bdloc_home', ['title' => 'Bienvenue sur BDLOC !']) ?>
<?php $this->start('main_content') ?>
	<div class="main-home">
		<div class="login"><?php $this->insert('user/login_insert',['username'=>'','error'=>'']) ?></div>

		<div id="slider">
			<figure>
				<img src="<?= $this->assetUrl('img/slider/roy-lichtenstein_00249251.jpg') ?>" alt>
				<img src="<?= $this->assetUrl('img/slider/slider02.jpg') ?>" alt>
				<img src="<?= $this->assetUrl('img/slider/slider03.jpg') ?>" alt>
				<img src="<?= $this->assetUrl('img/slider/slider04.jpg') ?>" alt>
				<img src="<?= $this->assetUrl('img/slider/roy-lichtenstein_00249251.jpg') ?>" alt>
			</figure>
		</div>

		<div class="maintop">
			<div class="subscribe">
				<a href="<?= $this->url('inscription') ?>" title="Abonnement">Abonnez-vous à BDLOC</a>
			</div>
			<div class="homewords">
			...la Marie de Paris a décidé de créer un nouveau système de location de BD, bdloc.fr,
			<div class="cent"> 100% en ligne,</div><div class="cent">100% gratuit,</div> <div class="cent">100% moderne</div>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
