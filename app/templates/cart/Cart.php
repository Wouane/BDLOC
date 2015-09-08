<?php $this->layout('layout_bdloc', ['title' => 'Bienvenue sur la page Panier']) ?>
	
	<?php $this->start("main_content") ?>
	
	<h2>Bienvenue sur votre panier <span><?= $w_user['username']; ?></span> ! </h2>
	<div class="main-cart">	
		<table class="my-cart">
			<caption><i class="fa fa-shopping-cart cart"></i> Mon panier</caption>
			<thead>
				<th>Cover</th>
				<th>Titre</th>
				<th>Auteur</th>
				<th>Supression</th>					
			</thead>
			<tbody>
				<!-- Debut FOREACH pour affichage des livres dans le panier -->
			<?php foreach($books as $book):?>
			<tr>
				<td>
					<img src="<?php echo $this->assetUrl('img/couvertures-medium/'.$book['cover']);?>">
				</td>
				<td>
					<?= $this->e($book['title'])?>
				</td>
				<td>
					<?= $this->e($book['sfirstname'])?>
				</td>
				<td>
					<a class="Delete" href="<?= $this->url('deleteBook',['book_Id'=>$book['id']])?>">Retirer du panier</a>
				</td>
			</tr>
			<?php endforeach ?>
			</tbody>
		</table>
		<!-- ACTIONS DU PANIER -->
			<div class="actions-cart">
				<!-- SUPPRESSION DU PANIER -->
				<a href="<?= $this->url('delete_cart') ?>">Vider ce panier !</a>
				<!-- VALIDER LA COMMANDE -->
				<a href="<?= $this->url('submit_order') ?>">Valider la commande</a>
				<!-- RETOUR AU CATALOGUE -->
				<a href="<?= $this->url('catalogue') ?>">Continuer à bouquiner</a>
			</div>
	</div>
		
	
		<a href="<?php echo $this->url('catalogue') ?>" title="Continuer">Continuer à bouquiner</a>
		

	<?php $this->stop("main_content") ?>
	
	
	