<?php $this->layout('layout_bdloc', ['title' => 'BdLoc']) ?>




	<?php $this->start("main_content") ?>
	
	<h2>Bienvenue sur votre panier <span><?= $w_user['username']; ?></span> ! </h2>
	<div class="main-cart">	

		<?php debug($user)?>
	
		<!-- ACTIONS DU PANIER -->

	</div>
		
	
		<a href="<?php //echo $this->url('catalogue') ?>" title="Continuer">Continuer à bouquiner</a>
		

	<?php $this->stop("main_content") ?>
	
	
	