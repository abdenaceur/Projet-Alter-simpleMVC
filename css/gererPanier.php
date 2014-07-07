<?php

$action = $_REQUEST['action'];
switch($action)
{
	case 'voirCategories':
	{
  		$lesCategories = $pdo->getLesCategories();
		include("v_categories.php");
  		break;
	}
	case 'voirProduits' :
	{
		$lesCategories = $pdo->getLesCategories();
		include("vues/v_categories.php");
  		$categorie = $_REQUEST['categorie'];
		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		include("v_produits.php");
		break;
	}
	case 'ajouterAuPanier' :
	{
		$idProduit=$_REQUEST['produit'];
		$categorie = $_REQUEST['categorie'];
		$ok = ajouterAuPanier($idProduit);
		if(!$ok)
		{
			$message = "Cet article est déjà dans le panier !!";
			include("v_message.php");
		}
		$lesCategories = $pdo->getLesCategories();
		include("v_categories.php");
  		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		include("v_produits.php");
		break;
	}
	case 'voirPanier':
	{
		$n= nbProduitsDuPanier();
		if($n >0)
		{
			$desIdProduit = getLesIdProduitsDuPanier();
			$lesProduitsDuPanier = $pdo->getLesProduitsDuTableau($desIdProduit);
			include("v_panier.php");
			
		}
		else
		{
		   $message = "panier vide !!";
			include ("v_message.php");
			
		}
		break;
	}
	case 'supprimerUnProduit':
	{
		$idProduit=$_REQUEST['produit'];
		retirerDuPanier($idProduit);
		$desIdProduit = getLesIdProduitsDuPanier();
		$lesProduitsDuPanier = $pdo->getLesProduitsDuTableau($desIdProduit);
		include("v_panier.php");
		break;
	}
	case 'passerCommande' :
	    $n= nbProduitsDuPanier();
		if($n>0)
		{
			$nom ='';$rue='';$ville ='';$cp='';$mail='';
			include ("v_commande.php");
		}
		else
		{
			$message = "panier vide !!";
			include ("v_message.php");
		}
		break;
	case 'confirmerCommande'	:
	{
		$nom =$_REQUEST['nom'];$rue=$_REQUEST['rue'];$ville =$_REQUEST['ville'];$cp=$_REQUEST['cp'];$mail=$_REQUEST['mail'];
	 	$msgErreurs = getErreursSaisieCommande($nom,$rue,$ville,$cp,$mail);
		if (count($msgErreurs)!=0)
		{
			include ("v_erreurs.php");
			include ("v_commande.php");
		}
		else
		{
			$lesIdProduit = getLesIdProduitsDuPanier();
			 $pdo->creerCommande($nom,$rue,$cp,$ville,$mail, $lesIdProduit );
			$message = "Commande enregistrée";
			supprimerPanier();
			include ("v_message.php");
		}
		break;
	}
 }

?>