<?php

include("./modeles/magazine.inc.class.php");
class magazine_list {
	public function afficheMagazineList() {
		?>
    <header class="container header_section text-center AjusteMargeTop">
            <h2>MAGAZINE</h2>
    </header>
    <!-- /Section -->
    <!-- Contenu -->
    <article class="container contenu_interne">
        <!-- Checkboxes pour filtre -->
        <section class="col-lg-2 col-md-3 col-sm-12 col-xs-12 pull-down">
            <section class="col-lg-12 col-md-12 col-sm-3 col-xs-6 magazine">
				<!-- generation de Checkboxes pour filtre de style-->
                <?php
                $instance = Produits::getInstance('e0588135','dbconnect');
                $resultat =$instance->obtenir_style_filtre(); 
                ?>
            </section>
            <section class="col-lg-12 col-md-12 col-sm-3 col-xs-6 magazine ">
				<!-- generation de Checkboxes pour filtre de materiels-->
                <?php
                $resultat =$instance->obtenir_materiels_filtre(); 
                ?>
            </section>
            <section class="col-lg-12 col-md-12 col-sm-3 col-xs-6 magazine">
				<!-- generation de Checkboxes pour filtre de specifications-->
                <?php
                $resultat =$instance->obtenir_specifications_filtre(); 
                ?>
            </section>
            <section class="col-lg-12 col-md-12 col-sm-2 col-xs-5 magazine">
				<!-- generation de Checkboxes pour filtre par prix-->
                <?php
                $resultat =$instance->obtenir_prix_filtre();
                ?>
            </section>
        </section>
        <!-- /Checkboxes pour filtre -->
        <!-- Liste de produits -->
        <section class="col-lg-10 col-md-9 col-sm-12 col-xs-12 column text-center">
			<!-- methode que generer list de produits-->
            <?php
                $resultat =$instance->obtenir_produits(); 
            ?>
        </section>
        <!-- /Liste de produits -->
    </article>
    <!-- /Contenu -->
		<?php
	}
}
?>