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


class formulaire {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheFormulaire() {
		?>
<!-- Contenu -->
	<article class="container inscription_page">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-1 col-xs-12">
				
			</div>
			<div class="col-lg-8 col-md-8 col-sm-10col-xs-12 container contenu_interne">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					      <form role="form" id="formulaire">
        <div class="form-group">
          <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="prenom" name="nom" size="10" value="" autofocus placeholder="Nom" pattern="^[a-zA-Z]+$" required/>
          <label for="nom">Prénom :</label> 
            <input type="text" class="form-control" id="prenom" name="prenom" value="" placeholder="Prénom" pattern="^[a-zA-Z]+$" required/>
            <input type="radio" id="femme" name="sexe" required/>
          <label for="femme" class="sexe">Femme</label>
            <input type="radio" id="homme" name="sexe" required/>
          <label for="homme" class="sexe">Homme</label>
            <input type="radio" id="autre" name="sexe" required/>
          <label for="autre" class="sexe">Autre</label>
          <label for="adresse">Adresse :</label>
            <input type="text"  class="form-control" id="adresse" name="adresse" value="" placeholder="Adresse" pattern="^[a-zA-Z]+$" required />
          <label for="ville">Ville :</label>   
           <input type="text"  class="form-control" id="ville" name="ville" value="" placeholder="Ville" pattern="^[a-zA-Z]+$" required />
          <label for="province">Province :</label>
            <select id="province">
                <option value="Ontario">Ontario</option>
                <option value="Québec">Québec</option>
                <option value="Alberta">Alberta</option>
                <option value="Colombie-Britannique">Colombie-Britannique</option>
                <option value="Saskatchewan">Saskatchewan</option>
                <option value="Manitoba">Manitoba</option>
                <option value="Nouveau-Brunswick">Nouveau-Brunswick</option>
                <option value="Nouvelle-Écosse">Nouvelle-Écosse</option>
                <option value="Île du Prince Édouard">Île du Prince Édouard</option>
                <option value="Terre-Neuve">Terre-Neuve</option>
                <option value="Yukon">Yukon</option>
                <option value="Territoires du Nord-Ouest">Territoires du Nord-Ouest</option>
            </select>
          <label for="code">Code postal :</label>   
            <input type="text"  class="form-control" id="code" name="code postal" placeholder="Code postal" pattern="" required />
         
        </div>
      </form>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					 <label for="telephone">Téléphone :</label> 
            <input type="text"  class="form-control" id="telephone" name="telephone" placeholder="Téléphone" pattern="" required />
          <label for="exampleInputEmail1">Courriel</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Courriel">
          <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
          <label for="exampleInputPassword2">Confimration du mot de passe</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Mot de passe">
           <button type="submit" id="bouton" class="btn btn-default">Soumettre</button>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-1 col-xs-12">
				
			</div>

		</div>
		
	</article>
	<!-- /Contenu -->
		<?php
		
	}
	

}
?>