<?php $this->layout('layout_bdloc', ['title' => 'BdLoc']) ?>
<?php $this->start("header") ?>
	<!-- HEADER -->

		<header>
		<div class="navigation">
			<div class="BD">
				<a href="#"><i class="fa fa-book"></i> Les BDs !</a>
			</div>
			<div class="panier">
				<a href="#"><i class="fa fa-shopping-cart"></i> Mon panier</a>
			</div>
			<div class="compte">
				<a href="#"><i class="fa fa-user"></i> Mon compte</a>
			</div>
		</div>
 
 		<h1>Bonjour <?= $w_user['username']; ?> !</h1>
 		<input type="submit" value="Se déconnecter">
		</header>

	<?php $this->stop("header") ?>
	<?php $this->start("main_content") ?>

	<!-- Filtres -->
	
			<form name="Filtres" id="filtres" onChange="this.form.submit()">
			<fieldset>
				<legend>Filtres</legend>
				<h1>Catégories</h1>

				<input type="checkbox" name="Action" value="Action">
				<label for="Action">Action</label><br />

				<input type="checkbox" name="Adulte" value="Adulte">
				<label for="Adulte">Adulte</label><br />

				<input type="checkbox" name="Aventure" value="Aventure">
				<label for="Aventure">Aventure</label><br />

				<input type="checkbox" name="Aviation" value="Aviation">
				<label for="Aviation">Aviation</label><br />

				<input type="checkbox" name="Espionnage" value="Espionnage">
				<label for="Espionnage">Espionnage</label><br />

				<input type="checkbox" name="Fantastique" value="Fantastique">
				<label for="Fantastique">Fantastique</label><br />

				<input type="checkbox" name="Guerre" value="Guerre">
				<label for="Guerre">Guerre</label><br />

				<input type="checkbox" name="Heroic_fantasy" value="Heroic_fantasy">
				<label for="Heroic_fantasy">Heroic Fantasy</label><br />

				<input type="checkbox" name="Historique" value="Historique">
				<label for="Historique">Historique</label><br />

				<input type="checkbox" name="Humour" value="Humour">
				<label for="Humour">Humour</label><br />

				<input type="checkbox" name="Jeunesse" value="Jeunesse">
				<label for="Jeunesse">Jeunesse</label><br />

				<input type="checkbox" name="Inclassables" value="Inclassables">
				<label for="Inclassables">Inclassables</label><br />

				<input type="checkbox" name="Littérature" value="Littérature">
				<label for="Littérature">Littérature</label><br />

				<input type="checkbox" name="Polar" value="Polar">
				<label for="Polar">Polar</label><br />

				<input type="checkbox" name="science_fiction" value="science_fiction">
				<label for="science_fiction">Science Fiction</label><br />

				<input type="checkbox" name="Sentimental" value="Sentimental">
				<label for="Sentimental">Sentimental</label><br />

				<input type="checkbox" name="Sport" value="Sport">
				<label for="Sport">Sport</label><br />

				<input type="checkbox" name="Super_Heros" value="Super_Heros">
				<label for="Super_Heros">Super Héros</label><br />

				<input type="checkbox" name="tranche_de_vie" value="tranche_de_vie">
				<label for="Vie">Tranche de vie</label><br />

				<input type="checkbox" name="Thriller" value="Thriller">
				<label for="Thriller">Thriller</label><br />

				<input type="checkbox" name="Western" value="Western">
				<label for="Western">Western</label><br />

				<h1>Disponibilité</h1>

				<input type="checkbox" name="disponibles" value="disponibles">
				<label for="Disponibles">Disponibles</label><br />

				<input type="checkbox" name="Indisponibles" value="Indisponibles">
				<label for="Indisponibles">Indisponibles</label><br />

				<h1>Recherche</h1>
				<input type="recherche" placeholder="Mots-clefs" name="recherche">

			</fieldset>	
			</form>

		<!-- Tris et pagination -->
			<fieldset>
				<legend>Résultats</legend>
				<select name="Trier">
					<option value="date_ajout">Date d'ajout au catalogue</option>
					<option value="ordre_alphabetique">Ordre alphabétique</option>
					<option value="date_publication">Date de publication</option>
				</select>

				<select>
					<option value="20">Afficher 20 résultats</option>
					<option value="40">Afficher 40 résultats</option>
					<option value="60">Afficher 60 résultats</option>
				</select>

				<button><i class="fa fa-chevron-left"></i> Précédent</button>
				
				<button>Suivant <i class="fa fa-chevron-right"></i></button>
			</fieldset>	

<?php $this->stop("main_content") ?>