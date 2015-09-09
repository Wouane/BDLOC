<?php $this->layout('layout_bdloc', ['title' => 'BdLoc']) ?>




	<?php $this->start("main_content") ?>


 
<div class="main">
	<div class="filter">
	<!-- Filtres -->
		<form name="filters" id="filters" method='GET' action="<?php echo $this->url('catalogue')?>">					
				<h3>Catégories</h3>
				
				<div class="checkbox_content checker_all">
					<input type="checkbox" class="css-label lite-orange-check chk_boxe" id="check_all" value="check_all">
					<label for="check_all" class="cheked_label">Check all</label>					
				</div>

				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="adaptation" value="adaptation" class="chk_boxes">
					<label for="adaptation">Adaptation</label>
				</div>
				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="animalier" value="animalier" class="chk_boxes">
					<label for="animalier">Animalier</label>
				</div>

				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="aventure" value="aventure" class="chk_boxes">
					<label for="aventure">Aventure</label>
				</div>
				
				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="biographie" value="biographie" class="chk_boxes">
					<label for="biographie">Biographie</label>
				</div>
				
				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="comics" value="comics" class="chk_boxes">
					<label for="comics">Comics</label>
				</div>

				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="divers" value="divers" class="chk_boxes">
					<label for="divers">Divers</label>
				</div>

				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id= "heroic_fantasy" value="heroic_fantasy" class="chk_boxes">
					<label for="heroic_fantasy">Heroic Fantasy</label>
				</div>
				
				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="historique" value="historique" class="chk_boxes">
					<label for="historique">Historique</label>
				</div>
				
				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="humour" value="humour" class="chk_boxes">
					<label for="humour">Humour</label>
				</div>
					
				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="independant" value="independant" class="chk_boxes">
					<label for="independant">Indépendant</label>
				</div>
				
				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="jeunesse" value="jeunesse" class="chk_boxes">
					<label for="jeunesse">Jeunesse</label>
				</div>
				
				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="manga" value="manga" class="chk_boxes">
					<label for="manga">Manga</label>
				</div>

				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="polar" value="polar" class="chk_boxes">
					<label for="polar">Polar</label>
				</div>

				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="quotidien" value="quotidien" class="chk_boxes">
					<label for="quotidien">Quotidien</label>
				</div>

				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="roman" value="roman" class="chk_boxes">
					<label for="roman">Roman graphique</label>
				</div>
				
				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="fiction" value="fiction" class="chk_boxes">
					<label for="fiction">Science Fiction</label>
				</div>

				<div class="checkbox_content">
					<input type="checkbox" name="genre[]" id="thriller" value="thriller" class="chk_boxes">
					<label for="thriller">Thriller</label>
				</div>

		</form>
		<form name="dispo" method="GET" action="<?php echo $this->url('catalogue')?>">
			<h3>Disponibilité</h3>
			<div class="checkbox_content">
				<input type="checkbox" name="dispo" id="disponibles" value="disponibles">
				<label for="disponibles">Disponibles</label>
			</div>
			<div class="checkbox_content">
				<input type="checkbox" name="dispo" id="indisponibles" value="indisponibles">
				<label for="indisponibles">Indisponibles</label>
				<button type="submit">GOJOGO</button>
			</div>
		</form>
	</div>
<div class="maincat">
	<div class="results">
		<!-- Tris et pagination -->
		<form id="searchform" action="<?php echo $this->url('catalogue')?>" method="POST">
			<div class="search-input">
				<input class="search" type="search" placeholder="Recherche" name="search" id="search">
				<label class="search-label" for="search"><i class="fa fa-search"></i></label>
			</div>
		</form>

		<form method="GET" action="<?php echo $this->url('catalogue')?>">
				<select name="byOrder" onChange="this.form.submit()" id="byOrder">
					<option value="alpha" <?php if($_GET['byOrder'] =='alpha'){echo 'selected';} ?> id="byAlpha">Ordre alphabétique</option>
					<option value="date" <?php if($_GET['byOrder'] =='date'){echo 'selected';} ?> id="byDateCreated">Date d'ajout au catalogue</option>					
					<option value="publication" <?php if($_GET['byOrder'] =='publication'){echo 'selected';} ?> id="byDatePublish">Date de publication</option>
				</select>
		</form>
		<form method="GET" action="<?php echo $this->url('catalogue')?>">
				<select name="byNumber" onChange="this.form.submit()" id="byNumber">					
					<option value="20"<?php if($_GET['byNumber'] =='20'){echo 'selected';} ?>>Afficher 20 résultats</option>
					<option value="40"<?php if($_GET['byNumber'] =='40'){echo 'selected';} ?>>Afficher 40 résultats</option>
					<option value="60"<?php if($_GET['byNumber'] =='60'){echo 'selected';} ?>>Afficher 60 résultats</option>
				</select>

					<a href="?start=<?= $start-20 ?>"  <?php if ($start == 0): ?> onclick="return false" style="background:#CCC"<?php endif ?>><i class="fa fa-chevron-left"></i> Préc</a>
					<a href="?start=<?= $start+20 ?>">Suiv <i class="fa fa-chevron-right"></i></a>

								
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

