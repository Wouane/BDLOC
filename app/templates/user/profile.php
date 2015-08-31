<?php $this->layout('layout_bdloc', ['title' => 'Profil']) ?>

<?php $this->start('main_content'); ?>

	<h2 class="titre-profile">Vous êtes sur les paramètres utilisateurs de <span><?= $w_user['username']; ?></span> ! </h2>

	<div class="cd-tabs">
		<nav class="nav-tabs">
			<ul class="cd-tabs-navigation">
				<li>
					<a data-content="inbox" class="selected" href="#0"><i class="fa fa-file-text"></i> Mes informations</a>
				</li>
				<li>
					<a data-content="new" href="#0"><i class="fa fa-picture-o"></i> Ma photo</a>
				</li>
				<li>
					<a data-content="gallery" href="#0"><i class="fa fa-cog"></i> Mon compte</a>
				</li>
			</ul> <!-- cd-tabs-navigation -->
		</nav>
	<ul class="cd-tabs-content">
		<li data-content="inbox" class="selected">
			<h3 class="titre-section">Identifiants</h3>
		<form method="POST" enctype="multipart/form-data">
				<br/>
			<!-- NOM -->
				<div class="form-modify">
					<label for="lastname"><i class="fa fa-street-view"></i></label>
					<input name="lastname" placeholder="Prenom" type="text" id="lastname" class="form_modify" value="<?= $w_user['lastname']; ?>">
				</div>
			<!-- PRENOM -->
				<div class="form-modify">
					<label for="firstname"><i class="fa fa-street-view"></i></label>
					<input name="firstname" placeholder="Nom" type="text" id="firstname" class="form_modify" value="<?= $w_user['firstname']; ?>">
				</div>
			<!-- PSEUDO-->
				<div class="form-modify">
					<label for="username"><i class="fa fa-user"></i></label>
					<input name="username" placeholder="Pseudo" type="text" class="form_modify" value="<?= $w_user['username']; ?>">
				</div>
			<!-- EMAIL-->
				<div class="form-modify">
					<label for="email"><i class="fa fa-envelope"></i></label>
					<input name="email" placeholder="Email" type="email" class="form_modify" value="<?= $w_user['email']; ?>">
				</div>
				<hr>	
				<h3 class="titre-section">Mon Adresse</h3>
				<br/>
			<!--  ADRESS -->		
				<div class="form-modify">
					<label for="streetname"><i class="fa fa-home"></i></label>
					<input name="streetname" placeholder="Adresse" type="text" id="streetname" class="form_modify" value="<?= $w_user['street_name']; ?>">
				</div>
			<!--  ZIPCODE -->
				<div class="form-modify">
					<label for="zipcode"><i class="fa fa-home"></i></label>
					<input name="zipcode" placeholder=" Code postal" type="text" id="zipcode" class="form_modify" value="<?= $w_user['zip_code']; ?>">
				</div>
			<!-- CITY -->
				<div class="form-modify">
					<p>Paris</p>					
				</div>
			<!--PHONE -->
				<hr>
				<h3 class="titre-section">Numéro de téléphone</h3>
				<br/>
				<div class="form-modify">
					<label for="phonenumber"><i class="fa fa-mobile"></i></label>
					<input name="phonenumber" placeholder="Numéro Mobile / Fixe" type="text" id="phonenumber" class="form_modify" value="<?= $w_user['phone_number']; ?>">
				</div>
				<!-- VALIDATION -->
				<button type="submit" class="btn btn-modify">Valider</button>
				<div><?= $error; ?></div>
			
		</li>

		<li data-content="new">
				<div class="form-modify">
					<label for="picture">Modifiez votre image :</label>
					<input type="file" name="pic_name" id="pic_name"/>
				</div>
				<button type="submit" class="btn btn-modify">Valider</button>

		</li>

		<li data-content="gallery">
				<a href="<?= $this->url('changeMotdepasse'); ?>" title="password" >Modifier son mot de passe</a>
				<a href="" title="suppression du compte">Supprimer mon compte Bdloc</a>
		</li>
	</ul> <!-- cd-tabs-content -->
</div> <!-- cd-tabs -->
<?php $this->stop('main_content'); ?>