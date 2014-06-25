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


class panier {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function affichePanier() {
		?>
	<!-- Section -->
	<article class="container text-center header_section">
		 <h2>VOTRE PANIER</h2>
	</article>
	<!-- /Section -->
	<!-- Contenu -->
<article class="container contenu_interne">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="row magazine">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <a href='#'>
				    <img src="./img/alter-02-01.jpg" width="100%" class="img-responsive">
			    </a>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <h3>Alter Github - Noir</h3>
			     <h3>$219.99</h3>
                <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                        <h5>DÉTAIL</h5>
                    </a>
            </div>
        </div>
        <div class="row magazine">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                <a href='#'>
				    <img src="./img/alter-05-01.jpg" width="100%" class="img-responsive">
			    </a>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <h3>Alter Aptana - Noir</h3>
			     <h3>$180.99</h3>
                <a href="magazine-detail.html" class="btn btn-warning  btn-sm" role="button">
                        <h5>DÉTAIL</h5>
                    </a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-down">
        <h3>Total des produits:  400.98$</h3>
		  <h4>Sous-total        :  400.98$</h4>
		  <button type="button" class="btn btn-warning btn-lg btn-block">PASSER À LA CAISSE</button> 
	      <button type="button" class="btn btn-danger btn-lg btn-block">CONTINUER À MAGASINER</button>
    </div>
	</article>
	<!-- /Contenu -->
		<?php
		
	}
	

}
?>