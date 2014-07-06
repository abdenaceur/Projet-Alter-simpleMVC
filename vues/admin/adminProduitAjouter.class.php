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


class AdminProduitAjouter {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheAdminProduitAjouter() {
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
            <aside class="droitContent" >
                <h2>Ajouter un produit</h2>

                <form name="creerProduit" action="index.php?requete=admin&section=adminCreerProduit" method="POST">
                    <label>Nom:</label><input  class="form-control" type="text" name="produitNom"></br>
                    <label>Code du produit:</label><input type="text"  class="form-control" name="produitCode"></br>
                    <label>Couleur du bracelet:</label><input type="text" name="produitCouleur" class="form-control" ></br>
                    <label>Description:</label><textarea name="produitDesc" class="form-control" ></textarea></br>
                    <label>Système d'opération:</label><input type="text" name="produitOS" class="form-control" ></br>
                    <label>Contre l'eau</label><input type="text" name="produitWaterproof" class="form-control" ></br>
                    <label>Écran tactile</label><input type="text" name="produitTactile" class="form-control" ></br>
                    <label>Résolution:</label><input type="text" name="produitResolution" class="form-control" ></br>
                    <label>Microphone:</label><input type="text" name="produitMicrophone" class="form-control" ></br>
                    <label>Camera:</label><input type="text" name="produitCamera" class="form-control" ></br>
                    <label>Résolution de la caméra</label><input type="text" name="produitResolutionCamera" class="form-control" ></br>
                    <label>Haut parleur:</label><input type="text" name="produitHautparleur" class="form-control" ></br>
                    <label>Poids du produit:</label><input type="text" name="produitPoids" class="form-control" ></br>
                    <label>Prix du produit:</label><input type="text" name="produitPrix" class="form-control" ></br>
                    <label>Longeur du produit:</label><input type="text" name="produitLongeur" class="form-control" ></br>
                    <label>Largeur du produit:</label><input type="text" name="produitLargeur" class="form-control" ></br>
                    <input type="submit">
                </form>
                
            </aside>
        </article>

    </main>

	

		<?php
		
	}
	

}
?>