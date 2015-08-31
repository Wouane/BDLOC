<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/normalize.css') ?>">
	<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/custom.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/search.js') ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<header>
		<div id="logo">
			<a href="<?= $this->url('home') ?>"><img class="logo" src="<?= $this->assetUrl('img/logo-default.png') ?>" alt="logo BDLOC"/></a>
		</div>
		<h1 class="titre-home">BDLOC, louer gratuitement vos BD</h1>
		<!-- LOGIN  -->
		<div class="btn-login">
			<a href="#" title="Connexion"><button>Connexion</button></a>
		</div>
	</header>
	<div class="container">
		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
			<img class="palette" src="<?= $this->assetUrl('img/palette.jpg') ?>" alt="palette"/>
			<ul class="nav-footer">
				<li><a href="<?= $this->url('mentionsLegales'); ?>">Mentions légales</a></li> |
				<li><a href="<?= $this->url('contact'); ?>">Contactez-nous</a></li> |
			</ul>
		</footer>

		<!-- ENCART FACEBOOK -->
			<div class="fb-page" data-href="https://www.facebook.com/bdloc" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
				<div class="fb-xfbml-parse-ignore">
					<blockquote cite="https://www.facebook.com/bdloc">
						<a href="https://www.facebook.com/bdloc">Bdloc</a>
					</blockquote>
				</div>
			</div>

	</div>
</body>
</html>