<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/custom.js') ?>"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/admin.css') ?>">
</head>
<body>
	<div class="container">
	<div class="header">	
		<header>
			<h1>Page <?= $this->e($title) ?></h1>
			<a href="<?= $this->url('deconnexion_admin'); ?>" title="Deconnexion">Déconnexion</a>
		</header>
	</div>
		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>