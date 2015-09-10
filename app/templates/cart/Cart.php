<?php $this->layout('layout_bdloc', ['title' => 'BdLoc']) ?>




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

			<tr>
				<td>
					
				</td>
				<td>
				
				</td>
				<td>
				
				</td>
				<td>
					<a class="Delete" href="#">Retirer du panier</a>
				</td>
			</tr>

			</tbody>
		</table>
		<!-- ACTIONS DU PANIER -->

	</div>
		
	
		<a href="<?php echo $this->url('catalogue') ?>" title="Continuer">Continuer à bouquiner</a>
		

	<?php $this->stop("main_content") ?>
	
	
	