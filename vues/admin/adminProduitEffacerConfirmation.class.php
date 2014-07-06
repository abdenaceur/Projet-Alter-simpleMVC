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


class adminProduitEffacerConfirmation {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheAdminEffacerProduitBonneReponse() {
		?>

	
     <main>
        <article class="conteneur">
            <aside class="gaucheMenu">
                <nav id='cssmenu'>
                    <ul>
                        <li>
                            <a href='?requete=admin&section=adminAcceuil'>
                                <span>Acceuil</span>
                            </a>
                        </li>
                        <li class='has-sub'>
                            <a href='#'>
                                <span>Produits</span>
                            </a>
                            <ul>
                                <li>
                                    <a href='?requete=admin&section=adminProduitAjouter'>
                                        <span>Ajouter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href='?requete=admin&section=adminProduitRechercher'>
                                        <span>Modifier</span>
                                    </a>
                                </li>
                                <li class='last'>
                                    <a href='?requete=admin&section=adminProduitRechercher'>
                                        <span>Enlever</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'>
                            <a href='#'>
                                <span>Client</span>
                            </a>
                            <ul>
                                <li>
                                    <a href='?requete=admin&section=adminClientAjouter'>
                                        <span>Ajouter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href='?requete=admin&section=adminClientRechercher'>
                                        <span>Modifier</span>
                                    </a>
                                </li>
                                <li class='last'>
                                    <a href='?requete=admin&section=adminClientRechercher'>
                                        <span>Enlever</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='?requete=admin&section=adminStatistique'>
                                <span>Statistiques</span>
                            </a>
                        </li>
                        <li class='last'>
                            <a href='?requete=admin&section=adminMiseEnPage'>
                                <span>Mise en page</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </aside>
            <aside class="droitContent">
                <h2>Vous avez effacer le produit avec succès</h2>

            </aside>
        </article>
    </main>

	

		<?php
		
	}

    public function afficheAdminEffacerProduitMauvaiseReponse() {
        ?>


        <main>
            <article class="conteneur">
                <aside class="gaucheMenu">
                    <nav id='cssmenu'>
                        <ul>
                            <li>
                                <a href='?requete=admin&section=adminAcceuil'>
                                    <span>Acceuil</span>
                                </a>
                            </li>
                            <li class='has-sub'>
                                <a href='#'>
                                    <span>Produits</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href='?requete=admin&section=adminProduitAjouter'>
                                            <span>Ajouter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='?requete=admin&section=adminProduitRechercher'>
                                            <span>Modifier</span>
                                        </a>
                                    </li>
                                    <li class='last'>
                                        <a href='?requete=admin&section=adminProduitRechercher'>
                                            <span>Enlever</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class='has-sub'>
                                <a href='#'>
                                    <span>Client</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href='?requete=admin&section=adminClientAjouter'>
                                            <span>Ajouter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='?requete=admin&section=adminClientRechercher'>
                                            <span>Modifier</span>
                                        </a>
                                    </li>
                                    <li class='last'>
                                        <a href='?requete=admin&section=adminClientRechercher'>
                                            <span>Enlever</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href='?requete=admin&section=adminStatistique'>
                                    <span>Statistiques</span>
                                </a>
                            </li>
                            <li class='last'>
                                <a href='?requete=admin&section=adminMiseEnPage'>
                                    <span>Mise en page</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </aside>
                <aside class="droitContent">
                    <h2>Le produit n'a pas ete effacer.</h2>




                </aside>
            </article>

        </main>



    <?php

    }

}
?>