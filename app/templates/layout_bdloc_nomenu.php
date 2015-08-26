<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<!-- <link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.min.js') ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
			<ul class="nav-footer">
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Mentions légales</a></li>
				<li><a href="#">Contactez-nous</a></li>
			</ul>
		</footer>

	</div>
</body>
</html>