<?php
/**
 * Class Vue
 * Template de classe Vue. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */


class produit {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheProduit() {
		?>
		  <!-- Section -->
	<article class="container text-center header_section">
		<!-- <h2>LE PRODUIT</h2> -->
	</article>
	<!-- /Section -->
	<!-- Contenu -->
	<article class="container text-center produit">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<span class="clipping-frame">
					<img src="img/produit-01.jpg"  alt="Alter" height="250px"/>
				</span>
				<h3>Toujours branch&#233;e</h3>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<span class="clipping-frame">
					<img src="img/produit-02.jpg"  alt="Alter" height="250px"/>
				</span>
				<h3>Toujours allum&#233;e</h3>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<span class="clipping-frame">
					<img src="img/produit-03.jpg"  alt="Alter" height="250px"/>
				</span>
				<h3>&Eacute;cran protecteur en saphire</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<span class="clipping-frame">
					<img src="img/produit-04.jpg"  alt="Alter" height="250px"/>
				</span>
				<h3>Caisson en aluminium</h3>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<span class="clipping-frame">
					<img src="img/produit-05.jpg"  alt="Alter" height="250px"/>
				</span>
				<h3>Variété de modèles</h3>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
			</div>
		</div>
	</article>
	<!-- /Contenu -->
		<?php
		
	}
	

}
?>