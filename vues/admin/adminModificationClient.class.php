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


class adminModificationClient {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheAdminModificationClient($informationClient) {
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
                
                <form name="creerClient" action="index.php?requete=admin&section=adminModificationClientConfirmation" method="POST">
                    <input type="text" name="clientid" class="form-control" value="<?php echo $informationClient[0]['Client_ID'] ?>" hidden></br>
                    <label>Nom:</label><input type="text" name="nom" class="form-control" value="<?php echo $informationClient[0]['Client_Nom'] ?>"></br>
                    <label>Prénom:</label><input type="text" name="prenom" class="form-control" value="<?php echo $informationClient[0]['Client_Prenom'] ?>"></br>
                    <label>Adresse:</label><input type="text" name="adresse" class="form-control" value="<?php echo $informationClient[0]['Client_Adresse'] ?>"></br>
                    <label>Ville:</label><input name="ville" class="form-control" value="<?php echo $informationClient[0]['Client_Ville'] ?>"></br>
                    <label>Code postal:</label><input type="text" name="codepostal" class="form-control" value="<?php echo $informationClient[0]['Client_Codepostal'] ?>"></br>
                    <label>Pays:</label><input type="text" name="pays" class="form-control" value="<?php echo $informationClient[0]['Client_Pays'] ?>"></br>
                    <label>Téléphone</label><input type="text" name="telephone" class="form-control" value="<?php echo $informationClient[0]['Client_Tel'] ?>"></br>
                    <label>Email:</label><input type="text" name="email" class="form-control" value="<?php echo $informationClient[0]['Client_Email'] ?>"></br>
                    <label>Nom utilisateur:</label><input type="text" name="nomUtilisateur" class="form-control" value="<?php echo $informationClient[0]['Client_NomUtilisateur'] ?>"></br>

                    
                    <input type="submit">
                </form>
                
                
            </aside>
        </article>

    </main>

	

		<?php
		
	}
	

}
?>