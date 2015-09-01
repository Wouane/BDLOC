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
		<form class="update-profile" method="POST" enctype="multipart/form-data">
			<h3 class="titre-section"><i class="fa fa-user"></i> Identifiants</h3>
				<br/>
			<!-- NOM -->
				<div class="form-modify">
					<label for="lastname"> NOM</label>
					<input name="lastname" placeholder="Prenom" type="text" id="lastname" class="form_modify" value="<?= $w_user['lastname']; ?>">
				</div>
			<!-- PRENOM -->
				<div class="form-modify">
					<label for="firstname"> PRENOM</label>
					<input name="firstname" placeholder="Nom" type="text" id="firstname" class="form_modify" value="<?= $w_user['firstname']; ?>">
				</div>
			<!-- PSEUDO-->
				<div class="form-modify">
					<label for="username"> PSEUDO</label>
					<input name="username" placeholder="Pseudo" type="text" class="form_modify" value="<?= $w_user['username']; ?>">
				</div>
			<!-- EMAIL-->
				<div class="form-modify">
					<label for="email"> EMAIL</label>
					<input name="email" placeholder="Email" type="email" class="form_modify" value="<?= $w_user['email']; ?>">
				</div>
				<br/>	
				<h3 class="titre-section"><i class="fa fa-home"></i> Mon Adresse</h3>
				<br/>
			<!--  ADRESS -->		
				<div class="form-modify">
					<label for="streetname"> ADRESSE</label>
					<input name="streetname" placeholder="Adresse" type="text" id="streetname" class="form_modify" value="<?= $w_user['street_name']; ?>">
				</div>
			<!--  ZIPCODE -->
				<div class="form-modify">
					<label for="zipcode"> CODE POSTAL</label>
					<input name="zipcode" placeholder=" Code postal" type="text" id="zipcode" class="form_modify" value="<?= $w_user['zip_code']; ?>">
				</div>
			<!-- CITY -->
				<div class="form-modify">
					<label for="city"> VILLE</label>
					<input name="zipcode" placeholder=" Code postal" type="text" id="zipcode" class="form_modify" value="PARIS">
				</div>
		
			<!--PHONE -->
				<br/>
				<h3 class="titre-section">Numéro</h3>
				<br/>
				<div class="form-modify">
					<label for="phonenumber"> TELEPHONE </label>
					<input name="phonenumber" placeholder="Numéro Mobile / Fixe" type="text" id="phonenumber" class="form_modify" value="<?= $w_user['phone_number']; ?>">
				</div>
				<!-- VALIDATION -->
				<button type="submit" class="btn btn-default">Valider</button>
				<div><?= $error; ?></div>
			
		</li>

		<li data-content="new">
				<div class="form-modify">
					<div class="profil-picture">
					<p>Photo actuelle</p>
  					<img class="edit-picture" src="<?= $this->assetUrl('img/uploads/thumbnails/' . $w_user['pic_name'])?>" alt="Photo du profil Utilisateur">
  					</div>
					
					<label for="picture">Modifiez votre image :</label>
					<input type="file" name="pic_name" id="pic_name"/>
					<button type="submit" class="btn btn-default">Valider</button>
				</div>

		</li>

		<li data-content="gallery">
				<a href="<?= $this->url('changeMotdepasse'); ?>" title="password">
					<i class="fa fa-unlock"></i> Modifier mon mot de passe
				</a>
				<a href="" title="suppression du compte" onclick="return(confirm('Etes-vous sûr de vouloir supprimer votre compte ?'));">
					<i class="fa fa-trash-o"></i>Supprimer mon compte Bdloc
				</a>
		</li>
	</ul> <!-- cd-tabs-content -->
</div> <!-- cd-tabs -->
<?php $this->stop('main_content'); ?>