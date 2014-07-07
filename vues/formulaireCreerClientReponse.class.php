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
class formulaireCreerClientReponse {
	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheFormulaireCreerClientBonneReponse() {
		?><!-- Section -->
	<article class="container text-center header_section">
		<h2>Votre compte a ete creer avec succes.</h2>

	</article>
	<!-- /Contenu -->
		<?php
		
	}
        public function afficheFormulaireCreerClientPasReponse() {
		?><!-- Section -->
<article class="container text-center header_section">
    <h2>Votre compte n'a pas pus etre creer.</h2>

</article>
<!-- /Contenu -->
<?php

}
}
?>