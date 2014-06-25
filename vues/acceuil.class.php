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


class acceuil {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheAccueil() {
		?>
		<!-- Carrier d'images -->
	<article id="carousel-example-generic" class="container carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
			<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
			<li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item">
				<img src="./img/final-02.jpg" alt="Alter, Slimmer">
				<div class="carousel-caption">
					<h1>LÉGÈRE</h1>
				</div>
			</div>
			<div class="item">
				<img src="./img/final-01.jpg" alt="Alter, Customisable">
				<div class="carousel-caption">
					<h1>PERSONNALISÉE</h1>
				</div>
			</div>
			<div class="item active">
				<img src="./img/final-03.jpg" alt="Alter, Inteligent">
				<div class="carousel-caption">
					<h1>INTELLIGENTE</h1>
				</div>
			</div>
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</article>
	<!-- /.carousel-inner -->
	<!-- Banniers -->
	<article class="container">
		<section class="row">
			<a href="magazine-list.html" class="accueil_ban">
				<div class="col-md-6 accueil_bannier accueil_bannier_img_1">
					<div class="col-md-5 col-sm-4 col-xs-12">
					</div>
					<div class="col-md-7 col-sm-8 col-xs-12 text-center">
						<h2>Commandez votre ALTER</h2>
					</div>
				</div>
			</a>
			<a href="produit.html" class="accueil_ban">
				<div class="col-md-6 accueil_bannier accueil_bannier_img_2">
					<div class="col-md-6 col-sm-4 col-xs-12">
					</div>
					<div class="col-md-6 col-sm-8 col-xs-12 text-center">
						<h2>&Eacute;tanche & R&eacute;sistante</h2>
					</div>
				</div>
			</a>
		</section>
		<section class="row">
			<a href="magazine-detail.html" class="accueil_ban">
				<div class="col-md-6 accueil_bannier accueil_bannier_img_3">
					<div class="col-md-6 col-sm-4 col-xs-12 ">
					</div>
					<div class="col-md-6 col-sm-8 col-xs-12 text-center">
						<h2>ALTER Aurora</h2>
					</div>
				</div>
			</a>
			<a href="magazine-detail.html" class="accueil_ban">
				<div class="col-md-6 accueil_bannier accueil_bannier_img_4">
					<div class="col-md-5 col-sm-4 col-xs-12 ">
					</div>
					<div class="col-md-7 col-sm-8 col-xs-12 text-center">
						<h2>ALTER Classique</h2>
					</div>
				</div>
			</a>
		</section>
	</article>
	<!-- /Banniers -->
		<?php
		
	}
	

}
?>