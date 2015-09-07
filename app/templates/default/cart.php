<?php $this->layout('layout_bdloc', ['title' => 'Bienvenue sur la page Panier']) ?>
	
	<?php $this->start("main_content") ?>
	
	<h2>Bienvenue sur votre panier <span><?= $w_user['username']; ?></span> ! </h2>
	<div class="main-cart">	

		<table class="my-cart">

			<caption><i class="fa fa-shopping-cart cart"></i> Mon panier</caption>
			<thead>
				<th>Poster</th>
				<th>Titre</th>
				<th>Retirer du panier</th>
			</thead>
			<tbody>
				<tr>
					<td>Image</td>
					<td>Titre</td>
					<td>Retirer du Panier</td>
				</tr>
				<tr>
					<td>Image</td>
					<td>Titre</td>
					<td>Retirer du Panier</td>
				</tr>
				<tr>
					<td>Image</td>
					<td>Titre</td>
					<td>Retirer du Panier</td>
				</tr>
				<tr>
					<td>Image</td>
					<td>Titre</td>
					<td>Retirer du Panier</td>
				</tr>
			</tbody>

		<table>

	</div>
		
	
		<a href="<?php echo $this->url('catalogue') ?>" title="Continuer">Continuer à bouquiner</a>
		

	<?php $this->stop("main_content") ?>
	
	
	