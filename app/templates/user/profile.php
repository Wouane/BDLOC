<?php $this->layout('layout_bdloc', ['title' => 'Profil']) ?>

<?php $this->start('main_content'); ?>

	<h2>Hello <span><?= $w_user['username']; ?></span> ! Vous allez modifier vos informations</h2>

	<div class="cd-tabs">
	<nav>
		<ul class="cd-tabs-navigation">
			<li><a data-content="inbox" class="selected" href="#0">Mes informations</a></li>
			<li><a data-content="new" href="#0">Ma photo</a></li>
			<li><a data-content="gallery" href="#0">Mon compte</a></li>
		</ul> <!-- cd-tabs-navigation -->
	</nav>

	<ul class="cd-tabs-content">
		<li data-content="inbox" class="selected">
			<h2>Identifiants</h2>
		<form method="POST" enctype="multipart/form-data">
				<br/>
			<!-- NOM -->
				<div class="form-modify">
					<label for="lastname"><i class="fa fa-street-view"></i> Nom</label>
					<input name="lastname" type="text" id="lastname" class="form_modify" value="<?= $w_user['lastname']; ?>">
				</div>
			<!-- PRENOM -->
				<div class="form-modify">
					<label for="firstname"><i class="fa fa-street-view"></i> Prénom</label>
					<input name="firstname" type="text" id="firstname" class="form_modify" value="<?= $w_user['firstname']; ?>">
				</div>
			<!-- PSEUDO-->
				<div class="form-modify">
					<label for="username"><i class="fa fa-user"></i> Pseudo</label>
					<input name="username" type="text" class="form_modify" value="<?= $w_user['username']; ?>">
				</div>
			<!-- EMAIL-->
				<div class="form-modify">
					<label for="email"><i class="fa fa-envelope"></i>Email</label>
					<input name="email" type="email" class="form_modify" value="<?= $w_user['email']; ?>">
				</div>
				<hr>	
				<h2>Mon Adresse</h2>
				<br/>
			<!--  ADRESS -->		
				<div class="form-modify">
					<label for="streetname"><i class="fa fa-home"></i> Rue</label>
					<input name="streetname" type="text" id="streetname" class="form_modify" value="<?= $w_user['street_name']; ?>">
				</div>
			<!--  ZIPCODE -->
				<div class="form-modify">
					<label for="zipcode"><i class="fa fa-home"></i> Code postal</label>
					<input name="zipcode" type="text" id="zipcode" class="form_modify" value="<?= $w_user['zip_code']; ?>">
				</div>
			<!-- CITY -->
				<div class="form-modify">
					<p>Paris</p>					
				</div>
			<!--PHONE -->
				<hr>	
				<h2>>Numéro de téléphone</h2>
				<br/>
				<div class="form-modify">
					<label for="phonenumber"><i class="fa fa-mobile"></i> N° Mobile ou Fixe</label>
					<input name="phonenumber" type="text" id="phonenumber" class="form_modify" value="<?= $w_user['phone_number']; ?>">
				</div>
			
		</li>

		<li data-content="new">
				<div class="form-modify">
					<label for="picture">Modifiez votre image :</label>
					<input type="file" name="pic_name" id="pic_name"/>
				</div>
		</li>

		<li data-content="gallery">
				<a href="<?= $this->url('changeMotdepasse'); ?>" title="password" >Modifier son mot de passe</a>
				<button type="submit" class="btn btn-modify">Valider</button>
				<div><?= $error; ?></div>
				<a href="" title="suppression du compte">Supprimer mon compte Bdloc</a>
		</li>
	</ul> <!-- cd-tabs-content -->
</div> <!-- cd-tabs -->
<?php $this->stop('main_content'); ?>