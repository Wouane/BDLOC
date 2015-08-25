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
	<div class="container">
		<section>
			<?= $this->section('main_content') ?>
		</section>

		<br />
		<p>==========Footer==========</p>
		<br />

		<footer>
			<div class="bas">
				<p>Facebook | Twitter | Mentions Légales | Contactez-nous </p>
			</div>
		</footer>

	</div>
</body>
</html>