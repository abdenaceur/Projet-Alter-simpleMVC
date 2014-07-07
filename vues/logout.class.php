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


class logout {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheLogout() {
	session_destroy();
        ?>
        <article class="container text-center header_section">
		<h2>Votre compte a ete deconnecter avec succes.</h2>

	</article>

        <script>
            window.addEventListener('load', init);
            function init() {
                var target = document.getElementById('barLogin');
                document.getElementById('barLogin').className="hidden";
            }
        </script>

<?php
    }
	

}
?>