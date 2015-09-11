<?php $this->layout('layout_bdloc', ['title' => 'BdLoc']) ?>




	<?php $this->start("main_content") ?>
	
	<h2 class="cart-title">Vous êtes sur le panier de <span><?= $w_user['username']; ?></span> ! </h2>
<div class="main-cart">	
		<table class="my-cart">
			<caption><i class="fa fa-shopping-cart cart"></i> Mon panier</caption>
			<thead>
				<th>Cover</th>
				<th>Titre</th>
			</thead>
			<tbody>
				
				<!-- Debut FOREACH pour affichage des livres dans le panier -->
			<?php foreach($books as $book):?>
			<tr>
				<td>
					<img src="<?php echo $this->assetUrl('img/couvertures-medium/'.$book['cover']);?>" width='150px'>
				</td>
				<td class="article-title">
					<?= $this->e($book['title'])?>
				</td>
				
			</tr>
			<?php endforeach ?>

			</tbody>
		</table>
		<!-- ACTIONS DU PANIER -->

	</div>
		
	
		<a href="<?php echo $this->url('catalogue') ?>" title="Continuer">Continuer à bouquiner</a>
		

	<?php $this->stop("main_content") ?>
	
	
	