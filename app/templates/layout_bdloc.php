<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<!-- <link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>"> -->
	<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/custom.js') ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>">
</head>

<body>
	<!-- ============= -->
		<!-- HEADER -->
	<!-- ============= -->

	<header>
		<div id="logo">
			<a href="<?= $this->url('home') ?>"><img class="logo" src="<?= $this->assetUrl('img/logo-default.png') ?>" alt="logo"/></a>
		</div>
		<!-- NAV PRINCIPAL -->
		<nav>
			<ul class="navigation">
				<li><a href="<?= $this->url('catalogue') ?>" title="Catalogue"><i class="fa fa-book"></i> Les BDs !</a></li>
				<li><a href="<?= $this->url('panier') ?>" title="Panier"><i class="fa fa-shopping-cart"></i> Mon panier [ 0 ]</a></li>
				<li><a href="<?= $this->url('profile') ?>" title="profil"><i class="fa fa-user"></i> Mon compte</a></li>
			</ul>
		</nav>
		<!-- ESPACE USER -->
		<div class="logout">
  			<h1 class="titre-logout">Bonjour <?= $w_user['username']; ?> !</h1>
  			<div class="profil-picture">
  				<img src="<?= $this->assetUrl('img/profil_default.jpg') ?>"/>
  			</div>
  		<!-- DECONNEXION -->
 			<a class="link-logout" href="<?= $this->url('deconnexion'); ?>" title="deconnexion" >Deconnexion</a> 
 		</div>
	</header>

	<!-- ============= -->
		<!--MAIN CONTENT -->
	<!-- ============= -->
	<div class="main">
		<section>
			<?= $this->section('main_content') ?>
		</section>
	</div>
	<!-- ============= -->
		<!-- FOOTER -->
	<!-- ============= -->

		<footer>
			<img class="palette" src="<?= $this->assetUrl('img/palette.jpg') ?>" alt="palette"/>
			<ul class="nav-footer">
				<li><a href="#">Facebook</a></li> |
				<li><a href="#">Twitter</a></li> |
				<li><a href="<?= $this->url('mentionsLegales'); ?>">Mentions légales</a></li> |
				<li><a href="<?= $this->url('contact'); ?>">Contactez-nous</a></li> |
			</ul>
		</footer>
		
	</div>
</body>
</html>