<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="icon" type=img/png href="<?= $this->assetUrl('img/logo-icon.png') ?>">
	<!-- LIGHTBOX PLUGIN -->
	<link href="//cdn.rawgit.com/noelboss/featherlight/1.3.3/release/featherlight.min.css" type="text/css" rel="stylesheet" />
	<!-- TYPOGRAPHIES -->
	<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style-tabs.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>">

		
</head>
<body>
<!-- ============= -->
<!-- HEADER -->
<!-- ============= -->
	<header>
		<div id="logo">
			<a href="<?= $this->url('home') ?>"><img class="logo" src="<?= $this->assetUrl('img/logo-default.png') ?>" alt="logo BDLOC"/></a>
		</div>
		<!-- NO NAV -->
		<h1 class="titre-home">BDLOC, louer gratuitement vos Bandes dessinées</h1>
		<!-- ESPACE USER -->
		<div class="btn-login">
			<button>Connexion</button>
		</div>
	</header>
<!-- ============= -->
	<!--MAIN CONTENT -->
<!-- ============= -->
		<section>
			<?= $this->section('main_content') ?>
		</section>
<!-- ============= -->
<!-- FOOTER -->
<!-- ============= -->
		<footer>
			<ul class="nav-footer">				
				<li><a href="<?= $this->url('mentionsLegales'); ?>">Mentions légales</a></li> |
				<li><a href="<?= $this->url('contact'); ?>">Contactez-nous</a></li> |
			</ul>
		<!-- ENCART FACEBOOK -->
			<div id="fb-root">
				<div class="fb-page" data-href="https://www.facebook.com/bdloc" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
					<div class="fb-xfbml-parse-ignore">
						<blockquote cite="https://www.facebook.com/bdloc">
							<a href="https://www.facebook.com/bdloc">Bdloc</a>
						</blockquote>
					</div>
				</div>
			</div>
		</footer>
						<!-- JQUERY CUSTOM PLUGGIN -->
		<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
		<script type="text/javascript" src="<?= $this->assetUrl('js/custom.js') ?>"></script>
</body>
</html>