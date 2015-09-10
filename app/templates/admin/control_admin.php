<?php $this->layout('layout_backoffice', ['title' => 'Back Office']) ?>

<?php $this->start('main_content') ?>

	<table class="table">
		<caption>Tous les 30minutes</caption>
		<thead>
			<tr>
				<th><i class="fa fa-user"></i> Visiteur en ligne</th>
				<th><i class="fa fa-toggle-on"></i> Panier actifs</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>0</td>
			</tr>
		</tbody>
	</table>

	<table class="table">
		<caption>Actuellement en attente</caption>
		<thead>
			<tr>
				<th><i class="fa fa-shopping-cart"></i> Commandes</th>
				<th><i class="fa fa-book"></i> Bande dessinés disponible</th>
				<th><i class="fa fa-user-times"></i> Produits hors stock</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>0</td>
				<td><?php echo $countstock; ?></td>
				<td>0</td>
			</tr>
		</tbody>
	</table>

	<table class="table">
		<caption>Notifications</caption>
		<thead>
			<tr>
				<th><i class="fa fa-envelope-o"></i> Nouveaux messages</th>
				<th><i class="fa fa-user-plus"></i> Nombre d'Admins</th>
				<th><i class="fa fa-users"></i> Nombre d'utilisateurs</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>3</td>
				<td><?php echo $count_admin; ?></td>
				<td><?php echo $count; ?></td>
			</tr>
		</tbody>
	</table>	

<?php $this->stop('main_content') ?>