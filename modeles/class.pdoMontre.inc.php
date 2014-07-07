<?php


class PdoMontre
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=e0588135';
      	private static $user='e0588135' ;
      	private static $mdp='880703' ;
		private static $monPdo;
		private static $monPdoMontre = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		PdoMontre::$monPdo = new PDO(PdoMontre::$serveur.';'.PdoMontre::$bdd, PdoMontre::$user, PdoMontre::$mdp); 
			PdoMontre::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoMontre::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 */
	public  static function getPdoMontre()
	{
		if(PdoMontre::$monPdoMontre == null)
		{
			PdoMontre::$monPdoMontre= new PdoMontre();
		}
		return PdoMontre::$monPdoMontre;  
	}

   public function getLesProduits()
	{
	    $req="select * from produit ";
		$res = PdoMontre::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes; 
	}

	public function getLesProduitsDuTableau($desIdProduit)
	{
		$nbProduits = count($desIdProduit);
		$lesProduits=array();
		if($nbProduits != 0)
		{
			foreach($desIdProduit as $unIdProduit)
			{
                $idProduit = $unIdProduit['PanierProduit_ID'];
				$req = "select * from produit where Produit_ID = '$idProduit'";
				$res = PdoMontre::$monPdo->query($req);
				$unProduit = $res->fetch();
				$lesProduits[] = $unProduit;
			}
		}
		return $lesProduits;
	}

}
?>