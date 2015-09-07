<?php $this->layout('layout_bdloc', ['title' => 'Error 404 ']) ?>

<?php $this->start('main_content'); ?>
<img class="error" src="<?= $this->assetUrl('img/error404.jpg') ?>">
<?php $this->stop('main_content'); ?>
