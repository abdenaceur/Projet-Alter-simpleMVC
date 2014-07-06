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
class plandusite {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function affichePlanDuSite() {
		?><!-- Section -->
	<article class="container text-center header_section">
		<h2>PLAN DU SITE</h2>
	</article>
	<!-- /Section -->
	<!-- Contenu -->
	<article class="container contenu_interne">
			<div class="col-lg-4 col-md-4 col-sm-3 col-xs-0">
			</div>
			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
					<p><a href="?requete=acceuil">ACCUEIL</a></p>
					<p><a href="?requete=magazine">MAGAZINE</a></p>
					<p><a href="?requete=apropos">&Agrave; PROPOS</a></p>
					<p><a href="?requete=produit">SPÉCIFICATIONS</a></p>
					<p><a href="?requete=contact">CONTACT</a></p>
					<p><a href="?requete=login">SE CONNECTER</a></p>
					<p><a href="?requete=formulaire">S'INSCRIRE</a></p>
					<p><a href="?requete=panier">PANIER D'ACHAT</a></p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-5 col-xs-7">
				<p><a href="?requete=info_exp">INFORMATION D’EXP&Eacute;DITION</a></p>
				<p><a href="?requete=faq">FAQ</a></p>
				<p><a href="?requete=politiqueretour">POLITIQUE DE RETOUR </a></p>
				<p><a href="?requete=plandusite">PLAN DU SITE</a></p>
				<p><a href="?requete=politiqueconfidentialite">POLITIQUE DE CONFIDENTIALIT&Eacute;</a></p>
				<p><a href="?requete=admin?section=adminAcceuil">ADMINISTRATEUR</a></p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-1 col-xs-0">
			</div>
	</article>
	<!-- /Contenu -->
		<?php
		
	}
}
?>