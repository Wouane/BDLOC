<?php $this->layout('layout_bdloc', ['title' => 'Details']) ?>

<?php $this->start('main_content') ?>

<div>Titre : <?php echo $book['title']; ?></div>
<div>Stock : <?php echo $book['stock']; ?></div>
<div>Editeur : <?php echo $book['publisher']; ?></div>
<div><img src="<?php echo $this->assetUrl('img/couvertures-medium/'. $book["cover"]); ?>"> </div>

<?php $this->stop('main_content') ?> 

