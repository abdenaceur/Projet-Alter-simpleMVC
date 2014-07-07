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
  //http://www.sitepoint.com/form-validation-with-php/
 /*$nom = $prenom = $sexe = $adresse = $ville = $province = $code = $telephone = $courriel = $mdp = "";
  $nomErreur = $prenomErreur = $sexeErreur = $adresseErreur = $villeErreur = "";
  $provinceErreur = $codeErreur = $telephoneErreur = $courrielErreur = $mdpErreur = "";
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(empty($_POST["nom"])) {
      $nomErreur = "Le nom est manquant";
    } else {
      $nom = $_POST["nom"];
    }
    if(empty($_POST["prenom"])) {
      $prenomErreur = "Le prenom est manquant";
    } else {
      $prenom = $_POST["prenom"];
    }
    if(!isset($_POST["sexe"])) {
      $sexeErreur = "Le sexe est manquant";
    } else {
      $sexe = $_POST["sexe"];
    }
    if(empty($_POST["adresse"]) {
      $adresseErreur = "L'adresse est manquante";
    } else {
      $adresse = $_POST["adresse"];
    }
    if(empty($_POST["ville"])) {
      $villeErreur = "La ville est manquante";
    } else {
      $ville = $_POST["ville"];
    }
    if(!isset($_POST["options"]) && $_POST["options"] == "Sélection" ){
      $provinceErreur = "La province est manquante";
    } else {
      $province = $_POST["options"];
    }
    //if(empty($_POST["province"])) {
    //  $provinceErreur = "La province est manquante";
    //} else {
    // $province = $_POST["province"];
    //}
    if(empty($_POST["code"])) {
      $codeErreur = "Le code postal est manquant";
    } else {
      $code = $_POST["code"];
    }
    if(empty($_POST["telephone"])) {
      $telephoneErreur = "Le téléphone est manquant";
    } else {
      $telephone = $_POST["telephone"];
    }
    if(empty($_POST["courriel"])) {
      $courrielErreur = "Le courriel est manquant";
    } else {
      $courriel = $_POST["courriel"];
    }
    if(empty($_POST["mdp"])) {
      $mdpErreur = "Le mot de passe est manquant";
    } else {
      $mdp = $_POST["mdp"];
    }
  } */


class formulaire {

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
   *Note : <span class="help-inline"></span> ne sont utiles dans la validation actuelle mais sont là pour un usage éventuel
	 */
	public function afficheFormulaire($valid = array()) {
		?>
   <?php
    if(isset($valid) && !empty($valid["msgErreur"])) {
   ?> 
  <!-- Message d'erreur -->
  <?php
    echo $valid["msgErreur"];
  }//end if
  ?>

<!-- Contenu -->
	<article class="container inscription_page">
    <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12">    
    </div>
    <div class="col-lg-8 col-md-8 col-sm-10col-xs-12 container contenu_interne">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <form class="form-horizontal" role="form" id="formulaire" method="POST" action="index.php?requete=formulaireConfirmation">
        <div class="form-group">
          <label class="control-label" for="nom">Nom :</label>
            <input class="form-control" type="text" id="nom" name="nom" value="<?php if(isset($_POST['nom']))echo $_POST['nom']?>" maxlength="30" placeholder="Nom" />
              <span class="help-inline"></span>
        </div>
        <div class="form-group">
          <label class="control-label" for="nom">Prénom :</label> 
            <input class="form-control" type="text" id="prenom" name="prenom" value="<?php if(isset($_POST['prenom']))echo $_POST['prenom']?>" maxlength="30" placeholder="Prénom" />
              <span class="help-inline"></span>
        </div>    
        <div class="form-group">
          <input type="radio" id="femme" name="sexe" value="femme"/>
            <label class="control-label" for="femme" class="sexe">Femme</label>
              <input type="radio" id="homme" name="sexe" value="homme"/>
                <label class="control-label" for="homme" class="sexe">Homme</label>
                  <input type="radio" id="autre" name="sexe" value="autre" />
                     <label class="control-label" for="autre" class="sexe">Autre</label>  
        </div>                
        <div class="form-group">
          <label class="control-label" for="adresse">Adresse :</label>
            <input class="form-control" type="text" id="adresse" name="adresse" value="<?php if(isset($_POST['adresse']))echo $_POST['adresse']?>" placeholder="Adresse" />
              <span class="help-inline"></span>
        </div>
        <div class="form-group">
          <label class="control-label" for="ville">Ville :</label>   
            <input class="form-control" type="text" id="ville" name="ville" value="<?php if(isset($_POST['ville']))echo $_POST['ville']?>" placeholder="Ville" />
              <span class="help-inline"></span>
        </div>
        <div class="form-group">
          <label class="control-label" for="province">Province :</label>
            <select class="form-control" id="province" name="option[]">
              <option value="Sélection">Sélection</option>
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
        </div>
        <div class="form-group">
          <label class="control-label" for="code">Code postal :</label>   
            <input class="form-control" type="text" id="code" maxlength="7" name="codepostal" value="<?php if(isset($_POST['code']))echo $_POST['code']?>" placeholder="Code postal" />
              <span class="help-inline"></span>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label class="control-label" for="telephone">Téléphone :</label> 
            <input class="form-control" type="text" id="telephone" name="telephone" value="<?php if(isset($_POST['telephone']))echo $_POST['telephone']?>" placeholder="Téléphone"  />
              <span class="help-inline"></span>
        </div>
        <div class="form-group">
          <label class="control-label" for="courriel">Courriel</label>
            <input class="form-control" type="email" id="courriel" name="courriel" value="<?php if(isset($_POST['courriel']))echo $_POST['courriel']?>" placeholder="Courriel">
              <span class="help-inline"></span>
        </div>
        <div class="form-group">
          <label class="control-label" for="mdp1">Mot de passe</label>
            <input class="form-control" type="password" name="mdp" id="mdp1" placeholder="Mot de passe">
              <span class="help-inline"></span>
        </div>
        <div class="form-group">
          <label class="control-label" for="mdp2">Confimration du mot de passe</label>
            <input class="form-control" type="password" name="mdpConfirmation" id="mdp2" placeholder="Mot de passe">
              <span class="help-inline"></span>
        </div>
          <input type="submit" class="btn btn-default" name="button" id="button" value="Soumettre">
          <input type="hidden" name="requete" value="ajouterUsager">
      </form>
    </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12">    
    </div>
    </div>
  </article>
  <script src="js/formulaire.js"></script> 
	<!-- /Contenu -->
		<?php
		
	}
	

}
?>