<?php $this->layout('layout_bdloc', ['title' => 'BdLoc']) ?>

	<?php $this->start("main_content") ?>


<div class="main">
	<div class="filter">
	<!-- Filtres -->
		<form name="filters" id="filters" method='GET' action="<?php echo $this->url('catalogue')?>">					
				<h3>Catégories</h3>

				<input type="checkbox" class="chk_boxe" id="check_all" value="check_all">
				<label for="check_all" class="cheked_label">Check all</label>
				<br>

				<input type="checkbox" name="genre[]" id="adaptation" value="adaptation" class="chk_boxes">
				<label for="adaptation">Adaptation</label><br />

				<input type="checkbox" name="genre[]" id="animalier" value="animalier" class="chk_boxes">
				<label for="animalier">Animalier</label><br />

				<input type="checkbox" name="genre[]" id="aventure" value="aventure" class="chk_boxes">
				<label for="aventure">Aventure</label><br />

				<input type="checkbox" name="genre[]" id="biographie" value="biographie" class="chk_boxes">
				<label for="biographie">Biographie</label><br />

				<input type="checkbox" name="genre[]" id="comics" value="comics" class="chk_boxes">
				<label for="comics">Comics</label><br />

				<input type="checkbox" name="genre[]" id="divers" value="divers" class="chk_boxes">
				<label for="divers">Divers</label><br />

				<input type="checkbox" name="genre[]" id= "heroic_fantasy" value="heroic_fantasy" class="chk_boxes">
				<label for="heroic_fantasy">Heroic Fantasy</label><br />

				<input type="checkbox" name="genre[]" id="historique" value="historique" class="chk_boxes">
				<label for="historique">Historique</label><br />

				<input type="checkbox" name="genre[]" id="humour" value="humour" class="chk_boxes">
				<label for="humour">Humour</label><br />

				<input type="checkbox" name="genre[]" id="independant" value="independant" class="chk_boxes">
				<label for="independant">Indépendant</label><br />

				<input type="checkbox" name="genre[]" id="jeunesse" value="jeunesse" class="chk_boxes">
				<label for="jeunesse">Jeunesse</label><br />

				

				<input type="checkbox" name="genre[]" id="manga" value="manga" class="chk_boxes">
				<label for="manga">Manga</label><br />

				<input type="checkbox" name="genre[]" id="polar" value="polar" class="chk_boxes">
				<label for="polar">Polar</label><br />


				<input type="checkbox" name="genre[]" id="quotidien" value="quotidien" class="chk_boxes">
				<label for="quotidien">Quotidien</label><br />

				<input type="checkbox" name="genre[]" id="roman" value="roman" class="chk_boxes">
				<label for="roman">Roman graphique</label><br />

				<input type="checkbox" name="genre[]" id="fiction" value="fiction" class="chk_boxes">
				<label for="fiction">Science Fiction</label><br />

				<!-- <input type="checkbox" name="genre[]" id="tranche_de_vie" value="tranche_de_vie" class="chk_boxes">
				<label for="tranche_de_vie">Tranche de vie</label><br /> -->

				<input type="checkbox" name="genre[]" id="thriller" value="thriller" class="chk_boxes">
				<label for="thriller">Thriller</label><br />

				<!-- <input type="checkbox" name="genre[]" id="western" value="western" class="chk_boxes">
				<label for="western">Western</label><br /> -->
				<button type="submit">Chercher</button>
		</form>
		<form >
			<h3>Disponibilité</h3>

			<input type="checkbox" name="disponibles" id="disponibles" value="disponibles">
			<label for="disponibles">Disponibles</label><br />
			<input type="checkbox" name="indisponibles" id="indisponibles" value="indisponibles">
			<label for="indisponibles">Indisponibles</label><br />
		</form>
	</div>
<div class="maincat">
	<div class="results">
		<!-- Tris et pagination -->
		<label for="search"><i class="fa fa-search"></i></label>
		<input type="search" placeholder="Recherche" name="search" id="search">
		<form method="GET">
				<select name="byOrder" onChange="this.form.submit()" id="byOrder">
					<option value="alpha" id="byAlpha">Ordre alphabétique</option>
					<option value="date" id="byDateCreated">Date d'ajout au catalogue</option>					
					<option value="publication" id="byDatePublish">Date de publication</option>
				</select>
		</form>
		<form method="GET">
				<select name="byNumber" onChange="this.form.submit()" id="byNumber">
					<option value="20">Afficher 20 résultats</option>
					<option value="40">Afficher 40 résultats</option>
					<option value="60">Afficher 60 résultats</option>
				</select>

					 <?php if ($start !== 0): ?>
					 	<a href="?start=<?= $start-20 ?>"><i class="fa fa-chevron-left"></i> Préc</a>
					 <?php endif ?>
					<a href="?start=<?= $start+20 ?>">Suiv <i class="fa fa-chevron-right"></i></a>

					<!--br>
					<?php if ($start !== 0): ?>
					 	<a href="?start=<?= $start-$byNumber ?>"><< Préc.</a>
					 <?php endif ?>
					<a href="?start=<?= $start+$byNumber ?>">Suiv. >></a-->					
		</form>
	</div>
	<div class="listcat">
		<?php  		
			foreach ($books as $book) {
				$findDetails = $this->url('details', ['id'=> $book['id']]);
				$cart = $this->url('panier');
				//debug ($findDetails);
				$bookie = $this->assetUrl('img/couvertures-medium/'. $book["cover"]);
				echo "<div class='book'>";				
				echo "<div class='left-mini'><img src=\"" . $bookie.  "\" alt='BDLOC'></div>";
				echo "<div class='right-mini'>";
				echo "<div class='ico-details'><a href='#' data-featherlight='" . $findDetails . "'><img src=\"" .$this->assetUrl('img/icone-details.png'). "\" alt='BDLOC'></a></div>";
				echo "<div class='ico-cart'><a href=".$cart.">";
				if ($book['stock']!=0) {
					echo "<img src=\"" .$this->assetUrl('img/icone-cart.png'). "\" alt='BDLOC'>";
				}
				echo "</a></div>";					
				echo "<ul>";				
				echo "<li class='title-bd'>" . $book['ttitle'] . "</li>";
				echo "<li class='title-bd'>" . $book['title'] . "</li>";
				echo "<li class='title-bd'>" . $book['catstyle'] . "</li>";				
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

