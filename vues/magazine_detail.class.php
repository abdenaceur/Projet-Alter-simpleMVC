<?php
// include pour obtenir des donées de magazine_list.class.php
include("./modeles/magazine.inc.class.php");
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
class magazine_detail {
	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheMagazineDetail() {
		?>    <!-- Section -->
    <article class="container text-center header_section">
        <h2>MAGAZINE</h2>
    </article>
    <!-- /Section -->
    <!-- Contenu -->
    <article class="container contenu_interne">
		<!-- Methode pour generer information détaillé de produit -->
		<?php
                $instance = produits::getInstance('e0588135','dbconnect');
            	$resultat =$instance->obtenir_produit_detail($_GET['id']); 
        ?>
    </article>
    <!-- /Contenu -->
		<?php
	}
}
?>