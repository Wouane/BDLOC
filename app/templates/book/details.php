
<div class="details">
	<div class="img_details"><img src="<?php echo $this->assetUrl('img/couvertures-originales/'. $book["cover"]); ?>"> </div>
	<div class="text_details">
		<div>
			<h2><?php echo $book['ttitle']; ?></h2>
		</div>
		<div>
			<h3><?php echo $book['title']; ?></h3>
		</div>
		<div>
			<strong>Résumé :</strong>
			<p><?php echo $book['nnote']; ?></p>
		</div>
		<div>
			<strong>Stock :</strong> 
			<?php echo $book['stock']; ?>
		</div>
		<div>
			<strong>Editeur :</strong> 
			<?php echo $book['publisher']; ?>
		</div>
		<div>
			<strong>Scenarist :</strong> 
			<?php echo $book['sfirstname']; ?> 
			<?php echo $book['slastname']; ?>
		</div>
		<div>
			<strong>Colorist :</strong> 
			<?php echo $book['cfirstname']; ?> 
			<?php echo $book['clastname']; ?>
		</div>
		<div>
			<strong>Illustrator :</strong> 
			<?php echo $book['ifirstname']; ?> 
			<?php echo $book['ilastname']; ?>
		</div>
	</div>
</div>


