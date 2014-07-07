<?php


	if(!isset($_SESSION['produits']))
	{
		$_SESSION['produits']= array();
	}

/**
 * Supprime le panier
 *
 * Supprime la variable de type session 
 */
function supprimerPanier()
{
	unset($_SESSION['produits']);
}

function ajouterAuPanier($idProduit)
{
	
	$ok = true;
	if(in_array($idProduit,$_SESSION['produits']))
	{
		$ok = false;
	}
	else
	{
		$_SESSION['produits'][]= $idProduit;
	}
	return $ok;
}
/**
 * Retourne les produits du panier
 */
function getLesIdProduitsDuPanier()
{
	return $_SESSION['produits'];

}
/**
 * Retourne le nombre de produits du panier
 */
function nbProduitsDuPanier()
{
	$n = 0;
	if(isset($_SESSION['produits']))
	{
	$n = count($_SESSION['produits']);
	}
	return $n;
}
/**
 * Retire un de produits du panier
 */
function retirerDuPanier($idProduit)
     {
		$index =array_search($idProduit,$_SESSION['produits']);
		unset($_SESSION['produits'][$index]);
}


?>
