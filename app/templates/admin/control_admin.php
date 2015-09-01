<?php $this->layout('layout_admin', ['title' => 'backOffice']) ?>

<?php $this->start('main_content') ?>

	<table>
		<caption>Tous les 30minutes</caption>
		<thead>
			<tr>
				<th><i class="fa fa-user"></i> Visiteur en ligne</th>
				<th><i class="fa fa-toggle-on"></i> Panier actifs</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>10</td>
				<td>1</td>
			</tr>
		</tbody>
	</table>

	<table>
		<caption>Actuellement en attente</caption>
		<thead>
			<tr>
				<th><i class="fa fa-shopping-cart"></i> Commandes</th>
				<th><i class="fa fa-cart-arrow-down"></i> Panier abandonnés</th>
				<th><i class="fa fa-user-times"></i> Produits hors stock</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>0</td>
				<td>2</td>
				<td>0</td>
			</tr>
		</tbody>
	</table>

	<table>
		<caption>Notifications</caption>
		<thead>
			<tr>
				<th><i class="fa fa-envelope-o"></i> Nouveaux messages</th>
				<th><i class="fa fa-user-plus"></i> Nouveaux clients</th>
				<th><i class="fa fa-users"></i> Nombre d'utilisateurs</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>7</td>
				<td>46</td>
				<td>142</td>
			</tr>
		</tbody>
	</table>	

<?php $this->stop('main_content') ?>