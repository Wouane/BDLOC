<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="icon" type=img/png href="<?= $this->assetUrl('img/logo-icon.png') ?>">
	<!-- LIGHTBOX PLUGIN -->
	<link href="//cdn.rawgit.com/noelboss/featherlight/1.3.3/release/featherlight.min.css" type="text/css" rel="stylesheet" />
	<!-- TYPOGRAPHIES -->
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
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
			<a href="<?= $this->url('catalogue') ?>"><img class="logo" src="<?= $this->assetUrl('img/logo-default.png') ?>" alt="logo"/></a>
		</div>
		<!-- NAV PRINCIPAL -->
		<nav>
			<ul class="navigation">
				<li class="link-catalog"><a href="<?= $this->url('catalogue') ?>" title="Catalogue"><i class="fa fa-book"></i> Les BDs !</a></li>
				<li class="link-profile"><a href="<?= $this->url('profile') ?>" title="profil"><i class="fa fa-user"></i> Mon compte</a></li>
				<li class="link-panier"><a href="<?= $this->url('panier') ?>" title="Panier"><i class="fa fa-shopping-cart"></i> Mon panier</a></li>
				<li class="link-contact"><a href="<?= $this->url('contact'); ?>" title="Contact"><i class="fa fa-phone"></i> Contactez-nous</a></li>
				
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
			<!-- Copyright -->
			<div class="copyright">
			    <p>© 2015 Bdloc. Tous droits réservés. Contact : bdlocbdloc@gmail.com.<p>
				<p>Responsable légal : Alexandre DUPARC, Florian MICHEL, Julien Morizot, Denis GODECQ</p>
				<address>
					<p>Copyright BDLOC INC © est situé au 136 avenue Pablo Picasso</p>
					<p>92000 - NANTERRE.</p>
					<p>Tél:(+33)1 45 25 35 45</p>
				</address>
			</div>	
			<!-- ENCART FACEBOOK -->
			<div id="fb-root">
				<div class="fb-page" data-href="https://www.facebook.com/espritbd" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
					<div class="fb-xfbml-parse-ignore">
						<blockquote cite="https://www.facebook.com/espritbd">
							<a href="https://www.facebook.com/espritbd">Bdloc</a>
						</blockquote>
					</div>
				</div>
			</div>
			<ul class="nav-footer">				
				<li><i class="fa fa-file-text-o footer"></i><a href="<?= $this->url('mentionsLegales'); ?>"> Mentions légales |</a></li> 
				<li><i class="fa fa-phone footer"></i><a href="<?= $this->url('contact'); ?>" title="Contact"> Contactez-nous</a></li>
			</ul>
		</footer>
		

	<!-- jQUERY -->
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
	<!-- JQUERY CUSTOM PLUGGIN -->
	<script type="text/javascript" src="<?= $this->assetUrl('js/custom.js') ?>"></script>
	<!-- AJAX RECHERCHE -->
	<script type="text/javascript" src="<?= $this->assetUrl('js/search.js') ?>"></script>
	<!-- JS TABS PROFILE -->
	<script type="text/javascript" src="<?= $this->assetUrl('js/main.js') ?>"></script>
	<!-- LIGHTBOX SCRIPT -->

	<script src="//code.jquery.com/jquery-latest.js"></script>
	<script src="//cdn.rawgit.com/noelboss/featherlight/1.3.3/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

	<!-- ADD MODERNIZR for responsive TABS -->
	<script src="<?= $this->assetUrl('js/modernizr.js') ?>"></script>
</body>
</html>