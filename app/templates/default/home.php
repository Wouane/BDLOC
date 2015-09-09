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
			<p class="text-homewords">La Marie de Paris a décidé de créer <span>Esprit Bd</span>, un site de location de BD réservé uniquement aux Parisiens<p>
				<div class="icone">
					<img class="icone-home" src ="<?= $this->assetUrl('img/icon-tour-eiffel.png') ?>" alt="icone tour eiffel">
				</div>
			<p class="text-homewords">Cette bédéthèque virtuelle vous permet de louerjusqu'à <span>10 Bandes-dessinées gratuitement !</span><p>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
