<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<header>
		<nav class="navigation">
			<div class="BD">
				<a href="#"><i class="fa fa-book"></i> Les BDs !</a>
			</div>
			<!-- LIEN PANIER -->
			<div class="panier"> 
				<a href="<?= $this->url('panier') ?>" title="panier"><i class="fa fa-shopping-cart"></i> Mon panier</a>
			</div>
			<!-- LIEN MON COMPTE -->
			<div class="compte">
				<a href="<?= $this->url('profile') ?>" title="profil"><i class="fa fa-user"></i> Mon compte</a>
			</div>
		</nav>
			<!-- ESPACE USER -->
		<div class="logout">
  			<h1>Bonjour <?= $w_user['username']; ?> !</h1>
  			<div class="profil-picture">
  				<p>ICI insertion petite image profil (avatar)</p>
  			</div>
  			<!-- DECONNEXION -->
 			<input type="submit" value="Déconnexion">
 		</div>
	</header>

<hr>
<br/>

	<div class="container">
		<section>
			<?= $this->section('main_content') ?>
		</section>
	</div>

<br/>		
<hr>
<br/>
		<footer class="footer-layout-bdloc-nomenu">
			<p>Facebook | Twitter | Mentions Légales | Contactez-nous </p>
		</footer>
		
	</div>
</body>
</html>