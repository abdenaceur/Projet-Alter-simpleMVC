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


class contact {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheContact() {
		?>

	<article class="container text-center header_section">
		<h2>CONTACT</h2>  
	</article>
	<!-- /Section -->
	<!-- Contenu -->
	<article class="container contenu_interne">
			<div class="col-lg-3 col-md-2 col-sm-2 col-xs-1">
			</div>
			<div class="col-lg-6 col-md-8 col-sm-8 col-xs-10" class="text-center">
				<img src="http://www.thecoolist.com/wp-content/uploads/2013/06/Qlocktwo-W-Watch-4-600x388.jpg" alt="Alter, customisable" class="img-responsive">
			</div>
			<div class="col-lg-3 col-md-2 col-sm-2 col-xs-1">
			</div>
	</article>
	<article class="container text-center">
			<div class="col-lg-2 col-md-2 col-sm-1 col-xs-1">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
				<h3>Des questions? Contactez-nous.</h3>
				<a href="mailto:info@altertemps.com" ><h4>info@altertemps.com</h4></a>
				<h4>+1 949 200 7649</h4>
				
			<!--	<h5>Si vous attendez la r&#233;ponse de notre e-mail, v&#233;rifiez votre dossier Spam / courrier ind&#233;sirable.</h5> -->
				
				<h5>Heures d'ouverture: 9 heures-17 heures (TVP) / Lun-ven</h5>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-1 col-xs-1">
			</div>
	</article>
	<!-- /Contenu -->

		<?php
		
	}
	

}
?>