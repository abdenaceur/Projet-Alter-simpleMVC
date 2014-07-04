<?php
// include pour obtenir des donées de magazine_list.class.php
include("./modeles/Magazine.inc.class.php");
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
class Magazine_list {
	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheMagazineList() {
		?><!-- Section -->
    <article class="container header_section text-center">
            <h2>MAGAZINE</h2>
    </article>
    <!-- /Section -->
    <!-- Contenu -->
    <article class="container contenu_interne">
        <!-- Checkboxes pour filtre -->
        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 pull-down">
            <div class="col-lg-12 col-md-12 col-sm-3 col-xs-6 magazine ">
                <?php
                $instance = Produits::getInstance('alterdb','dbconnect');
                $resultat =$instance->obtenir_style(); 
                ?>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-3 col-xs-6 magazine ">
                <?php
                $resultat =$instance->obtenir_materiels(); 
                ?>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-3 col-xs-6 magazine">
                <?php
                $resultat =$instance->obtenir_specifications(); 
                ?>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-2 col-xs-5 magazine">
                <?php
                $resultat =$instance->obtenir_prix();
                ?>
            </div>
        </div>
        <!-- /Checkboxes pour filtre -->
        <!-- Liste de produits -->
        <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 column text-center">
            <?php
                $resultat =$instance->obtenir_produits(); 
            ?>
        </div>
        <!-- /Liste de produits -->
    </article>
    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
    <script src="./js/main.js"></script>
    <!-- /Contenu -->
		<?php
		
	}
	

}
?>