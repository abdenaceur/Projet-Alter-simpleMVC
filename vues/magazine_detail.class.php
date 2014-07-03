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


class Magazine_detail {

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
		<?php
                $instance = Produits::getInstance('tpalter','dbconnect');
            	$resultat =$instance->obtenir_produit_detail($_GET['id']); 
        ?>
    </article>
    <!-- /Contenu -->
    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X');
        ga('send', 'pageview');
    </script>
		<?php
		
	}
	

}
?>