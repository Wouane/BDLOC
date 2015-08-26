<?php $this->layout('layout_bdloc', ['title' => 'BdLoc']) ?>

<?php $this->start("main_content") ?>


	<!-- Filtres -->
	<div class="filter">
			<form name="Filtres" id="filtres" onChange="this.form.submit()">
				<fieldset>
					<legend>Filtres</legend>

					<h1>Catégories</h1>
					</br>
					<input type="checkbox" name="action" id="action" value="action" checked>
					<label for="action">Action</label><br />

					<input type="checkbox" name="adulte" id="adulte" value="adulte" checked>
					<label for="adulte">Adulte</label><br />

					<input type="checkbox" name="aventure" id="aventure" value="aventure" checked>
					<label for="aventure">Aventure</label><br />

					<input type="checkbox" name="aviation" id="aviation" value="aviation" checked>
					<label for="aviation">Aviation</label><br />

					<input type="checkbox" name="espionnage" id="espionnage" value="espionnage" checked>
					<label for="espionnage">Espionnage</label><br />

					<input type="checkbox" name="fantastique" id="fantastique" value="fantastique" checked>
					<label for="fantastique">Fantastique</label><br />

					<input type="checkbox" name="guerre" id="guerre" value="guerre" checked>
					<label for="guerre">Guerre</label><br />

					<input type="checkbox" name="heroic_fantasy" id= "heroic_fantasy" value="heroic_fantasy" checked>
					<label for="heroic_fantasy">Heroic Fantasy</label><br />

					<input type="checkbox" name="historique" id="historique" value="historique" checked>
					<label for="historique">Historique</label><br />

					<input type="checkbox" name="humour" id="humour" value="humour" checked>
					<label for="humour">Humour</label><br />

					<input type="checkbox" name="jeunesse" id="jeunesse" value="jeunesse" checked>
					<label for="jeunesse">Jeunesse</label><br />

					<input type="checkbox" name="inclassables" id="inclassables" value="inclassables" checked>
					<label for="inclassables">Inclassables</label><br />

					<input type="checkbox" name="litterature" id="litterature" value="litterature" checked>
					<label for="litterature">Littérature</label><br />

					<input type="checkbox" name="polar" id="polar" value="polar" checked>
					<label for="polar">Polar</label><br />

					<input type="checkbox" name="science_fiction" id="science_fiction" value="science_fiction" checked>
					<label for="science_fiction">Science Fiction</label><br />

					<input type="checkbox" name="sentimental" id="sentimental" value="sentimental" checked>
					<label for="sentimental">Sentimental</label><br />

					<input type="checkbox" name="sport" id="sport" value="sport" checked>
					<label for="sport">Sport</label><br />

					<input type="checkbox" name="super_heros" id="super_heros" value="super_heros" checked>
					<label for="super_heros">Super Héros</label><br />

					<input type="checkbox" name="tranche_de_vie" id="tranche_de_vie" value="tranche_de_vie" checked>
					<label for="tranche_de_vie">Tranche de vie</label><br />

					<input type="checkbox" name="thriller" id="thriller" value="thriller" checked>
					<label for="thriller">Thriller</label><br />

					<input type="checkbox" name="western" id="western" value="western" checked>
					<label for="western">Western</label><br />
				</fieldset>
				<fieldset>
					<legend>Disponibilité</legend>
					
					<input type="checkbox" name="disponibles" id="disponibles" value="disponibles" checked>
					<label for="disponibles">Disponibles</label><br />

					<input type="checkbox" name="indisponibles" id="indisponibles" value="indisponibles">
					<label for="indisponibles">Indisponibles</label><br />

					<h1>Recherche</h1>
					<input type="recherche" placeholder="Mots-clefs" name="recherche">
				</fieldset>

				
			</form>
	</div>

	<!-- Results -->
	<div class="results">
		<!-- TRIER PAR TYPE -->
			<fieldset>
				<legend>Résultats</legend>
				<select name="Trier">
					<option value="date_ajout">Date d'ajout au catalogue</option>
					<option value="ordre_alphabetique">Ordre alphabétique</option>
					<option value="date_publication">Date de publication</option>
				</select>
		<!-- TRIER PAR NB DE RESULTATS -->
				<select>
					<option value="20">Afficher 20 résultats</option>
					<option value="40">Afficher 40 résultats</option>
					<option value="60">Afficher 60 résultats</option>
				</select>
		<!-- PAGINATION -->
				<button><i class="fa fa-chevron-left"></i> Précédent</button>
				<button>Suivant <i class="fa fa-chevron-right"></i></button>
			</fieldset>
	</div>

	<!-- APPEL DES COVERS -->
	<div class="listcat">
		<?php 
		foreach ($books as $book) {
			echo "<div class='book'><img src='" . $book['cover'] . "'></div>";
		
		//debug($books);
		}
		?>
	</div>


<?php $this->stop("main_content") ?>