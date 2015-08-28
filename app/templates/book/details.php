<?php $this->layout('layout_bdloc', ['title' => 'Details']) ?>

<?php $this->start('main_content') ?>
<div class="details">
	<div class="img_details"><img src="<?php echo $this->assetUrl('img/couvertures-medium/'. $book["cover"]); ?>"> </div>
	<div class="text_details">
		<div>Titre : <?php echo $book['title']; ?></div>
		<div>Stock : <?php echo $book['stock']; ?></div>
		<div>Editeur : <?php echo $book['publisher']; ?></div>
		<div>Scenarist : <?php echo $book['sfirstname']; ?> <?php echo $book['slastname']; ?></div>
		<div>Colorist : <?php echo $book['cfirstname']; ?> <?php echo $book['clastname']; ?></div>
		<div>Illustrator : <?php echo $book['ifirstname']; ?> <?php echo $book['ilastname']; ?></div>
	</div>

</div>
<?php $this->stop('main_content') ?> 

