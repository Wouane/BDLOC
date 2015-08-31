<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link href="//cdn.rawgit.com/noelboss/featherlight/1.3.3/release/featherlight.min.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/normalize.css') ?>">
	<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>">	
</head>

<body>
	<!-- ============= -->
		<!-- HEADER -->
	<!-- ============= -->

	<header>
		<div id="logo">
			<a href="<?= $this->url('catalogue') ?>"><img class="logo" src="<?= $this->assetUrl('img/logo-default.png') ?>" alt="logo"/></a>
		</div>
		<!-- NAV PRINCIPAL -->
		<nav>
			<ul class="navigation">
				<li class="link-catalog"><a href="<?= $this->url('catalogue') ?>" title="Catalogue"><i class="fa fa-book"></i> Les BDs !</a></li>
				<li class="link-profile"><a href="<?= $this->url('profile') ?>" title="profil"><i class="fa fa-user"></i> Mon compte</a></li>
				<li class="link-panier"><a href="<?= $this->url('panier') ?>" title="Panier"><i class="fa fa-shopping-cart"></i> Mon panier [ 0 ]</a></li>
			</ul>
		</nav>
		<!-- ESPACE USER -->
		<div class="logout">
  			
  			<div class="profil-picture">
  				<img class="user-picture" src="<?= $this->assetUrl('img/uploads/thumbnails/' . $w_user['pic_name'])?>" alt="Photo du profil Utilisateur">
  			</div>
  			<div class="text-profile">
  				<h1 class="titre-logout">Bonjour <?= $w_user['username']; ?> !</h1>
  				<!-- DECONNEXION -->
 				<a class="link-logout" href="<?= $this->url('deconnexion'); ?>" title="deconnexion" >Deconnexion</a> 
 			</div>
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
		
	</div>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/custom.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/search.js') ?>"></script>
	<script src="//code.jquery.com/jquery-latest.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

	<script src="//cdn.rawgit.com/noelboss/featherlight/1.3.3/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>