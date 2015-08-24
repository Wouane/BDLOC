<?php $this->layout('layout', ['title' => 'Error 404 ']) ?>

<?php $this->start('main_content'); ?>
<h1>Page non trouvé</h1>
<img src="<?= $this->assetUrl('img/pencilcharacter_red.png') ?>">
<?php $this->stop('main_content'); ?>
