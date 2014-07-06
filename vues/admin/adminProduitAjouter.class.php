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

            <!-- formulaire -->
            <div class="col-bg-12 col-md-12">
                <form role="form" name="creerProduit" action="index.php?requete=admin&section=adminCreerProduit" method="POST">
                    <div class="row">
                        <div class="col-bg-12 col-md-12">
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="nom_produit">Nom de produit *</label>
                                <input id="nom_produit" name="nom_produit" type="text" placeholder="" class="form-control input-medium" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-bg-6 col-md-6">
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="code_produit">Code de produit *</label>
                                <input id="code_produit" name="code_produit" type="text" placeholder="" class="form-control input-small" required="">
                            </div>
                        </div>
                        <div class="col-bg-6 col-md-6">
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="prix_produit">Prix *</label>
                                <input id="prix_produit" name="prix_produit" type="text" placeholder="" class="form-control input-small" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-bg-4 col-md-4">
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label for="style_produit">Style *</label>
                                <select id="style_produit" name="style_produit" class="form-control input-medium">
                                    <option>Casuel</option>
                                    <option>Classique</option>
                                    <option>Sportive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-bg-4 col-md-4">
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label for="materiel_produit">Materiel *</label>
                                <select id="materiel_produit" name="materiel_produit" class="form-control input-medium">
                                    <option>Cuir</option>
                                    <option>Metal</option>
                                    <option>synthetique</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-bg-4 col-md-4">
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label for="os_produit">OS *</label>
                                <select id="os_produit" name="os_produit" class="form-control input-medium">
                                    <option>IOS</option>
                                    <option>Android</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-bg-4 col-md-4">
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="coleur">Coleur</label>
                                <input id="coleur" name="coleur" type="text" placeholder="" class="form-control input-small" required="">
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="longeur_produit">Longeur</label>
                                <input id="longeur_produit" name="longeur_produit" type="text" placeholder="" class="form-control input-small" required="">
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="resolution_camera_produit">Resolution camera</label>
                                <input id="resolution_camera_produit" name="resolution_camera_produit" type="text" placeholder="" class="form-control input-small" required="">
                            </div>
                        </div>
                        <div class="col-bg-4 col-md-4">
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="poids_produit">Poids</label>
                                <input id="poids_produit" name="poids_produit" type="text" placeholder="" class="form-control input-small" required="">
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="largeur_produit">Largeur</label>
                                <input id="largeur_produit" name="largeur_produit" type="text" placeholder="" class="form-control input-small" required="">
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label for="resolution_ecran_produit">Resolution écran</label>
                                <input id="resolution_ecran_produit" name="resolution_ecran_produit" type="text" placeholder="" class="form-control input-small" required="">
                            </div>
                        </div>
                        <div class="col-bg-4 col-md-4">
                            <!-- Multiple Checkboxes -->
                            <div class="form-group">
                                <label for="specifications_produit">Spécifications</label>
                                <label class="checkbox" for="specifications_produit-0">
                                    <input type="checkbox" name="WaterProof" id="specifications_produit-0" value="WaterProof">WaterProof
                                </label>
                                <label class="checkbox" for="specifications_produit-1">
                                    <input type="checkbox" name="Hautparleur" id="specifications_produit-1" value="Hautparleur">Hautparleur
                                </label>
                                <label class="checkbox" for="specifications_produit-2">
                                    <input type="checkbox" name="TouchScreen" id="specifications_produit-2" value="TouchScreen">TouchScreen
                                </label>
                                <label class="checkbox" for="specifications_produit-3">
                                    <input type="checkbox" name="Microphone" id="specifications_produit-3" value="Microphone">Microphone
                                </label>
                                <label class="checkbox" for="specifications_produit-4">
                                    <input type="checkbox" name="Camera" id="specifications_produit-4" value="Camera">Camera
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-bg-4 col-md-4">
                            <!-- File Button -->
                            <div class="form-group">
                                <label for="image-01_produit">Image de produit - 01 *</label>
                                <input id="image-01_produit" name="image-01_produit" class="input-file" type="file">
                            </div>
                        </div>
                        <div class="col-bg-4 col-md-4">
                            <!-- File Button -->
                            <div class="form-group">
                                <label for="image-02_produit">Image de produit - 02 *</label>
                                <input id="image-02_produit" name="image-02_produit" class="input-file" type="file">
                            </div>
                        </div>
                        <div class="col-bg-4 col-md-4">
                            <!-- File Button -->
                            <div class="form-group">
                                <label for="image-03_produit">Image de produit - 03 *</label>
                                <input id="image-03_produit" name="image-03_produit" class="input-file" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-bg-12 col-md-12">
                            <!-- Textarea -->
                            <div class="form-group">
                                <label for="description_produit">Description de produit *</label>
                                <textarea id="description_produit" class="form-control" name="description_produit"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-bg-12 col-md-12">
                            <!-- Button -->
                            <div class="form-group">
                                <label for="singlebutton"></label>
                                <button id="singlebutton" name="singlebutton" class="btn btn-info">AJOUTER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- fin formulaire -->

        </aside>
        </article>

        </main>

		<?php
		
	}
	

}
?>