<?php $this->layout('layout_bdloc', ['title' => 'BdLoc']) ?>

	<?php $this->start("main_content") ?>
<div class="main">
	<div class="filter">
	<!-- Filtres -->
			<form name="filtres" id="filters" method='GET' action="<?php echo $this->url('catalogue')?>">
				<h1>Recherche</h1>
				<input type="search" placeholder="Mots-clefs" name="search" id="search">
				
				<fieldset>
					<legend>Filtres</legend>
					<h1>Catégories</h1>
	
					<input type="checkbox" name="action" id="action" value="action">
					<label for="action">Action</label><br />
	
					<input type="checkbox" name="adulte" id="adulte" value="adulte">
					<label for="adulte">Adulte</label><br />
	
					<input type="checkbox" name="aventure" id="aventure" value="aventure">
					<label for="aventure">Aventure</label><br />
	
					<input type="checkbox" name="aviation" id="aviation" value="aviation">
					<label for="aviation">Aviation</label><br />
	
					<input type="checkbox" name="espionnage" id="espionnage" value="espionnage">
					<label for="espionnage">Espionnage</label><br />
	
					<input type="checkbox" name="fantastique" id="fantastique" value="fantastique">
					<label for="fantastique">Fantastique</label><br />
	
					<input type="checkbox" name="guerre" id="guerre" value="guerre">
					<label for="guerre">Guerre</label><br />
	
					<input type="checkbox" name="heroic_fantasy" id= "heroic_fantasy" value="heroic_fantasy">
					<label for="heroic_fantasy">Heroic Fantasy</label><br />
	
					<input type="checkbox" name="historique" id="historique" value="historique">
					<label for="historique">Historique</label><br />
	
					<input type="checkbox" name="humour" id="humour" value="humour">
					<label for="humour">Humour</label><br />
	
					<input type="checkbox" name="jeunesse" id="jeunesse" value="jeunesse">
					<label for="jeunesse">Jeunesse</label><br />
	
					<input type="checkbox" name="inclassables" id="inclassables" value="inclassables">
					<label for="inclassables">Inclassables</label><br />
	
					<input type="checkbox" name="litterature" id="litterature" value="litterature">
					<label for="litterature">Littérature</label><br />
	
					<input type="checkbox" name="polar" id="polar" value="polar">
					<label for="polar">Polar</label><br />
	
					<input type="checkbox" name="science_fiction" id="science_fiction" value="science_fiction">
					<label for="science_fiction">Science Fiction</label><br />
	
					<input type="checkbox" name="sentimental" id="sentimental" value="sentimental">
					<label for="sentimental">Sentimental</label><br />
	
					<input type="checkbox" name="sport" id="sport" value="sport">
					<label for="sport">Sport</label><br />
	
					<input type="checkbox" name="super_heros" id="super_heros" value="super_heros">
					<label for="super_heros">Super Héros</label><br />
	
					<input type="checkbox" name="tranche_de_vie" id="tranche_de_vie" value="tranche_de_vie">
					<label for="tranche_de_vie">Tranche de vie</label><br />
	
					<input type="checkbox" name="thriller" id="thriller" value="thriller">
					<label for="thriller">Thriller</label><br />
	
					<input type="checkbox" name="western" id="western" value="western">
					<label for="western">Western</label><br />
				</fieldset>	
			</form>
			<form >
				<fieldset>
					<legend>Disponibilité</legend>
	
					<input type="checkbox" name="disponibles" id="disponibles" value="disponibles">
					<label for="disponibles">Disponibles</label><br />

					<input type="checkbox" name="indisponibles" id="indisponibles" value="indisponibles">
					<label for="indisponibles">Indisponibles</label><br />
				</fieldset>
			</form>
	</div>
<div class="maincat">
	<div class="results">
		<!-- Tris et pagination -->
		<form method="GET">
			<fieldset>
				<legend>Résultats</legend>
				<select name="byType" onChange="this.form.submit()" id="byType">
					<option selected>Trier</option>
					<option value="date" id="byDateCreated">Date d'ajout au catalogue</option>
					<option value="alpha" id="byAlpha">Ordre alphabétique</option>
					<option value="publication" id="byDatePublish">Date de publication</option>
				</select>

				<select name="byNumber" onChange="this.form.submit()" id="byNumber">
					<option value="20">Afficher 20 résultats</option>
					<option value="40">Afficher 40 résultats</option>
					<option value="60">Afficher 60 résultats</option>
				</select>

				<button><i class="fa fa-chevron-left"></i> Précédent</button>
				
				<button>Suivant <i class="fa fa-chevron-right"></i></button>
			</fieldset>
		</form>
	<div class="listcat">
		<?php  
		
			foreach ($books as $book) {
				$bookie = $this->assetUrl('img/couvertures-medium/'. $book["cover"]);
				echo "<div class='book'>";
				echo "<table><tr>";
				echo "<td>";
				echo "<td class='info-book'><img src=\"" . $bookie.  "\"></td>";
				echo "<td><span>" . $book['title'] . "</span></br>";
				echo "<span>" . $book['stock'] . "</span></br>";
				echo "<span>" . $book['sfirstname'] . "</span>";
				echo "<span> " . $book['slastname'] . "</span>";
				echo "<span>" . $book['cfirstname'] . "</span>";
				echo "<span> " . $book['clastname'] . "</span>";
				echo "<span>" . $book['ifirstname'] . "</span>";
				echo "<span> " . $book['ilastname'] . "</span>";
				echo "<div>".$book["stock"]." dispo</div>";
				echo "<div><button>Plus de détails</button></div>";	
				echo "<div><button>Panier ?</button></div>";	
				echo "</td></tr></table>";
				echo "</div>";
		}
			?>
	</div>
	</div>
</div>
</div>
<?php $this->stop("main_content") ?> 

