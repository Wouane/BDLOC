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

					<input type="checkbox" class="chk_boxe" label="check all" id="check_all" value="check_all">
					<label for="check_all" class="cheked_label">Check all</label>
					<br>
	
					<input type="checkbox" name="action" id="action" value="action" class="chk_boxes">
					<label for="action">Action</label><br />
	
					<input type="checkbox" name="adulte" id="adulte" value="adulte" class="chk_boxes">
					<label for="adulte">Adulte</label><br />
	
					<input type="checkbox" name="aventure" id="aventure" value="aventure" class="chk_boxes">
					<label for="aventure">Aventure</label><br />
	
					<input type="checkbox" name="aviation" id="aviation" value="aviation" class="chk_boxes">
					<label for="aviation">Aviation</label><br />
	
					<input type="checkbox" name="espionnage" id="espionnage" value="espionnage" class="chk_boxes">
					<label for="espionnage">Espionnage</label><br />
	
					<input type="checkbox" name="fantastique" id="fantastique" value="fantastique" class="chk_boxes">
					<label for="fantastique">Fantastique</label><br />
	
					<input type="checkbox" name="guerre" id="guerre" value="guerre" class="chk_boxes">
					<label for="guerre">Guerre</label><br />
	
					<input type="checkbox" name="heroic_fantasy" id= "heroic_fantasy" value="heroic_fantasy" class="chk_boxes">
					<label for="heroic_fantasy">Heroic Fantasy</label><br />
	
					<input type="checkbox" name="historique" id="historique" value="historique" class="chk_boxes">
					<label for="historique">Historique</label><br />
	
					<input type="checkbox" name="humour" id="humour" value="humour" class="chk_boxes">
					<label for="humour">Humour</label><br />
	
					<input type="checkbox" name="jeunesse" id="jeunesse" value="jeunesse" class="chk_boxes">
					<label for="jeunesse">Jeunesse</label><br />
	
					<input type="checkbox" name="inclassables" id="inclassables" value="inclassables" class="chk_boxes">
					<label for="inclassables">Inclassables</label><br />
	
					<input type="checkbox" name="litterature" id="litterature" value="litterature" class="chk_boxes">
					<label for="litterature">Littérature</label><br />
	
					<input type="checkbox" name="polar" id="polar" value="polar" class="chk_boxes">
					<label for="polar">Polar</label><br />
	
					<input type="checkbox" name="science_fiction" id="science_fiction" value="science_fiction" class="chk_boxes">
					<label for="science_fiction">Science Fiction</label><br />
	
					<input type="checkbox" name="sentimental" id="sentimental" value="sentimental" class="chk_boxes">
					<label for="sentimental">Sentimental</label><br />
	
					<input type="checkbox" name="sport" id="sport" value="sport" class="chk_boxes">
					<label for="sport">Sport</label><br />
	
					<input type="checkbox" name="super_heros" id="super_heros" value="super_heros" class="chk_boxes">
					<label for="super_heros">Super Héros</label><br />
	
					<input type="checkbox" name="tranche_de_vie" id="tranche_de_vie" value="tranche_de_vie" class="chk_boxes">
					<label for="tranche_de_vie">Tranche de vie</label><br />
	
					<input type="checkbox" name="thriller" id="thriller" value="thriller" class="chk_boxes">
					<label for="thriller">Thriller</label><br />
	
					<input type="checkbox" name="western" id="western" value="western" class="chk_boxes">
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
		</form>
		<form method="GET">
				<select name="byNumber" onChange="this.form.submit()" id="byNumber">
					<option value="20">Afficher 20 résultats</option>
					<option value="40">Afficher 40 résultats</option>
					<option value="60">Afficher 60 résultats</option>
				</select>

							
					<a href="?start=<?= $start-5 ?>"><< Préc.</a>
					<a href="?start=<?= $start+5 ?>">Suiv. >></a>
				
				
			</fieldset>
		</form>
	<div class="listcat">
		<?php  
		
			foreach ($books as $book) {
				$findDetails = $this->url('details', ['id'=> $book['id']]);
				//debug ($findDetails);
				$bookie = $this->assetUrl('img/couvertures-medium/'. $book["cover"]);
				echo "<div class='book'>";				
				echo "<div class='left-mini'><img src=\"" . $bookie.  "\" alt='BDLOC'></div>";
				echo "<div class='right-mini'>";
				echo "<div class='ico-details' id='details'><a href='#' data-featherlight='" . $findDetails . "'><img src=\"" .$this->assetUrl('img/bulle-details.png'). "\" alt='BDLOC'></a></div>";
				echo "<div class='ico-cart'><img src=\"" .$this->assetUrl('img/bulle-cart.png'). "\" alt='BDLOC'></div>";			
				echo "<ul>";				
				echo "<li class='title-bd'>" . $book['ttitle'] . "</li>";
				echo "<li class='title-bd'>" . $book['title'] . "</li>";
				if(isset($book['sfirstname'])){echo "<li>" . $book['sfirstname'] . " " . $book['slastname'] . " <a href='' class='tooltip'><i class='fa fa-info-circle'></i><span>Auteur</span></a></li>";}					
				if(isset($book['cfirstname'])){echo "<li>" . $book['cfirstname'] . " " . $book['clastname'] . " <a href='' class='tooltip'><i class='fa fa-info-circle'></i><span>Coloriste</span></a></li>";}					
				if(isset($book['ifirstname'])){echo "<li>" . $book['ifirstname'] . " " . $book['ilastname'] . " <a href='' class='tooltip'><i class='fa fa-info-circle'></i><span>Illustrateur</span></a></li>";}
				echo "<li>" . $book['stock'] . " disponibilité</li>";
				echo "</ul>";
				echo "</div>";
				echo "</div>";				
			
		}
			?>
	</div>
	</div>
</div>
</div>
<?php $this->stop("main_content") ?>

