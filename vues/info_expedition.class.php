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
class info_expedition {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheInfoExpedition() {
		?>
	<!-- Section -->
	<article class="container text-center header_section">
		<h2>INFORMATION D’EXP&Eacute;DITION</h2>
	</article>
	<!-- /Section -->
	<!-- Contenu -->
	<article class="container contenu_interne">
			<div class="col-lg-2 col-md-2 col-sm-1 col-xs-1">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-10">
				<h3>Livraison</h3>
				<p>L'adresse d'expédition indiquée doit être une adresse canadienne valide. Les commandes à destination d'une case postale sont acceptées.</p>
				<p>Dans la plupart des cas, il faut compter d'un à deux jours ouvrables pour l'expédition, à compter de la date où la commande a été passée (à l'exclusion des jours fériés).</p>
				<ul>
					<li>Pour les commandes expédiées par le service routier de Purolator, il faut compter de trois à dix jours ouvrables pour la livraison (à compter de la date d'expédition).</li>
					<li>Pour les commandes expédiées par le service express de Purolator, il faut compter de deux à trois jours ouvrables pour la livraison (à compter de la date d'expédition).</li>
					<li>Les cartes-cadeaux sont expédiées séparément de la marchandise, et des frais d'expédition supplémentaires s'appliquent (voir ci-dessous).</li>
					<li>Vous recevrez un courriel confirmant la date de livraison prévue; vous pouvez également vérifier ici le statut de votre commande.</li>
				</ul>
				<h3>Colis Multiples</h3>
				<p>Veuillez prendre note qu'il est possible que vous ne receviez pas tous vos articles dans un méme colis. Votre commande pourrait étre divisée en plusieurs colis, et ce, sans frais supplémentaires. Pour tout renseignement additionnel, veuillez communiquer avec le Service à la clientéle au moyen de notre site Web ou au 1.877.514.1959.</p>
				<h3>Calcul des frais d'expédition</h3>
				<p>Les frais d'expédition et de manutention sont déterminés en fonction de la valeur de votre commande, avant calcul des taxes et offres spéciales. Des frais supplémentaires de manutention et d'expédition de 6,50 $ sont appliqués à l'achat de chaque carte-cadeau. Toutes les commandes font l'objet d'une vérification.</p>
				<p>Source du texte : http://www.lechateau.com/style/company/links/shipping.jsp</p>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-1 col-xs-1">
			</div>
	</article>
	<!-- /Contenu -->
		<?php
	}
}
?>