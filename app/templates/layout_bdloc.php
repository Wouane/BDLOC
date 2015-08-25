<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>">
	<!-- <link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>"> -->
</head>
<body>
	<div class="container">
		<header>
			<h1><?= $this->e($title) ?></h1>
			<section>
				<?= $this->section('header') ?>
			</section>	
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer class="footer-layout-bdloc-nomenu">
			<p>Facebook | Twitter | Mentions Légales | Contactez-nous </p>
		</footer>
		
	</div>
</body>
</html>