<?php $this->layout('layout_bdloc', ['title' => 'BdLoc']) ?>
<?php $this->start("main_content") ?>
	<body>
	<!-- HEADER -->

		<header>
		<div class="navigation">
			<div class="BD">
				<a href="#">Les BDs !</a>
			</div>
			<div class="panier">
				<a href="#">Mon panier</a>
			</div>
			<div class="compte">
				<a href="#">Mon compte</a>
			</div>
		</div>
 
 		<h1>Bonjour (username) !</h1> 
 		<input type="submit" value="Se déconnecter">
		</header>

	<!-- Filtres -->
	
			<form name="Filtres">
			<fieldset>
				<legend>Filtres</legend>
				<h1>Catégories</h1>

				<input type="checkbox" name="aventure" value="aventure">
				<label for="Aventure">Aventure</label><br />

				<input type="checkbox" name="fantastique" value="fantastique">
				<label for="Fantastique">Fantastique</label><br />

				<input type="checkbox" name="historique" value="historique">
				<label for="Historique">Historique</label><br />

				<input type="checkbox" name="Jeunesse" value="Jeunesse">
				<label for="Jeunesse">Jeunesse</label><br />

				<input type="checkbox" name="polar" value="polar">
				<label for="Polar">Polar</label><br />

				<input type="checkbox" name="tranche_de_vie" value="tranche_de_vie">
				<label for="Vie">Tranche de vie</label><br />

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

				<button>Précédent</button>
				
				<button>Suivant</button>
			</fieldset>	
		
	

	</body>

<?php $this->stop("main_content") ?>