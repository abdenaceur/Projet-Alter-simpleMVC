
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

class ajouter {
     
   public function ajouterAuPanier() {







		$pdo = PdoMontre::getPdoMontre();
	    $idProduit=$_REQUEST['produit'];
		$ok = ajouterAuPanier($idProduit);
		 
		if(!$ok)
		{
			$message = "Cet article est déjà dans le panier !!";
			include("v_message.php");
		}
		
		 include("v_magazine.php"); 
		
		
	   
	}
  }

 ?>