<?php $this->layout('layout_bdloc', ['title' => 'Bienvenue sur la page Panier']) ?>
	
	<?php $this->start("main_content") ?>
	

	<div class="main-cart">
		<h1>Votre Panier</h1>
		<table>
			<caption>(maximum 10 articles)</caption>
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
			</tbody>
		<table>
	</div>
		
	
		<a href="<?php echo $this->url('catalogue') ?>" title="Continuer">Continuer à bouquiner</a>
		

	<?php $this->stop("main_content") ?>
	
	
	