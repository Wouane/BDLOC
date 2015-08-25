<?php $this->layout('layout_bdloc_nomenu', ['title' => 'Bienvenue sur la page Accueil !']) ?>




<?php $this->start('main_content') ?>
	<h1>Bienvenue sur la page d'Accueil</h1>

	<div class="presentation">
		<p>BDLOC est un site de location de Bande dessinés
		réservé aux Parisiens</p>
		<br/>
		<p>Réalisé par D.G | F.M | J.M | A.D</p>
		<a href="<?= $this->url('inscription') ?>" title="Abonnement">S'abonner</a> | <a href="<?= $this->url('connexion') ?>" title="Connexion">Connexion</a>
	</div>
<?php $this->stop('main_content') ?>
