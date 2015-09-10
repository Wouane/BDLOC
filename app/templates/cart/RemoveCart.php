<?php $this->layout('layout_bdloc', ['title' => 'BdLoc']) ?>




	<?php $this->start("main_content") ?>
	
	<h2>Bienvenue sur votre panier <span><?= $w_user['username']; ?></span> ! </h2>
	<div class="main-cart">	

		<?php debug($user)?>
	
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
		
	
		<a href="<?php //echo $this->url('catalogue') ?>" title="Continuer">Continuer à bouquiner</a>
		

	<?php $this->stop("main_content") ?>
	
	
	