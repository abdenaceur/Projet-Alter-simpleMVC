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


class AdminClientAjouter {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheAdminClientAjouter() {
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
                <h2>Ajouter un client</h2>

                <form name="creerClient" action="index.php?requete=admin&section=adminCreerClient" method="POST">
                    <label>Nom:</label><input type="text" name="nom" class="form-control" ></br>
                    <label>Prénom:</label><input type="text" name="prenom" class="form-control" ></br>
                    <label>Adresse:</label><input type="text" name="adresse" class="form-control" ></br>
                    <label>Ville:</label><textarea name="ville" class="form-control" ></textarea></br>
                    <label>Code postal:</label><input type="text" name="codepostal" class="form-control" ></br>
                    <label>Pays:</label><input type="text" name="pays" class="form-control" ></br>
                    <label>Téléphone</label><input type="text" name="telephone" class="form-control" ></br>
                    <label>Email:</label><input type="text" name="email" class="form-control" ></br>

                    <label>Mots de passe:</label><input type="text" name="mdp" class="form-control" ></br>

                    <input type="submit">
                </form>


            </aside>
        </article>


     </main>

	

		<?php
		
	}
	

}
?>