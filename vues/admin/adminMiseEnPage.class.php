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


class AdminMiseEnPage {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheMiseEnPage() {
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
                <h2>Changer la mise en page</h2>
                <h3>Changer les images du slider de la page d'acceuille</h3>
                <article class="modifierSlider">
                    
                    <img src="../img/1.png"><div class="section">
                    <p>Titre</p>
                    <input type="text">
                    <p>Description:</p>
                    <textarea></textarea>
                    <p>Veuiller uploader l'image:</p>
                    <input type="text"><input type="submit" value="Upload">
                    </div>
                   <img src="../img/2.png"><div class="section">
                    <p>Titre</p>
                    <input type="text">
                    <p>Description:</p>
                    <textarea></textarea>
                    <p>Veuiller uploader l'image:</p>
                    <input type="text"><input type="submit" value="Upload">
                    </div>
                   
                    <img src="../img/3.png"><div class="section">
                    <p>Titre</p>
                    <input type="text">
                    <p>Description:</p>
                    <textarea></textarea>
                    <p>Veuiller uploader l'image:</p>
                    <input type="text"><input type="submit" value="Upload">
                    </div>
                   
                    
                    <div class="section"></div>
                    <div class="section"></div>
                </article>
                
            </aside>
        </article>

     </main>
	

		<?php
		
	}
	

}
?>