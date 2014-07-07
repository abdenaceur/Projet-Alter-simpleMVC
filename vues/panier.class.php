
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

class panier {


   public function affichePanier() {
	 

		    $pdo = PdoMontre::getPdoMontre();
			//$desIdProduit = getLesIdProduitsDuPanier();

          $ProduitPanierModule = modeleAjoutRetirePanier::getInstance('e0588135','dbconnect');
          $desIdProduit = $ProduitPanierModule->getArrayProduitPanier();

    if($desIdProduit){

			$lesProduitsDuPanier = $pdo->getLesProduitsDuTableau($desIdProduit);
			
		   include ("v_panier.php");
	  }
	
		else 
		{
		  
		    $message = "panier vide !!";
			include ("v_message.php");
			
		}
       }
     }
 ?>

			
		

