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


class adminResultatRechercheProduit {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheAdminResultatRechercheProduit($resultatProduit) {
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
                <h2>Voici les resultats de la recherche</h2>
                <table border="2">
                    <tr>
                        <td>ID Produit</td>
                        <td>Nom</td>
                        <td>Code du produit</td>
                        <td>Style</td>
                        <td>Materiel</td>
                        <td>OS</td>
                        <td>Modifier/Effacer</td>
                    </tr>
                    <?php

                    for($i=0;$i<sizeof($resultatProduit);$i++){
                        echo "<tr>";
                        echo "<td>".$resultatProduit[$i]['Produit_ID']."</td>";
                        echo "<td>".$resultatProduit[$i]['Produit_Nom']."</td>";
                        echo "<td>".$resultatProduit[$i]['Produit_Code']."</td>";
                        echo "<td>".$resultatProduit[$i]['produit_style']."</td>";
                        echo "<td>".$resultatProduit[$i]['produit_materiel']."</td>";
                        echo "<td>".$resultatProduit[$i]['Produit_OS']."</td>";
                        echo "<td><a href='index.php?requete=admin&section=adminModificationProduit&produitid=".$resultatProduit[$i]['Produit_ID']."'><button type='submit' value='Modifier'>Modifier</button></a><a href='index.php?requete=admin&section=adminEffacerProduit&produitid=".$resultatProduit[$i]['Produit_ID']."'><button href='index.php?requete=admin&section=adminEffacerProduit' type='submit' value='Effacer'>Effacer</button> </a></td>";

                        echo "</tr>";
                    }
                    ?>


                </table>
            </aside>
        </article>

    </main>


		<?php
		
	}
	

}
?>