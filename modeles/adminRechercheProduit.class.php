<?php
include_once("./includes/connexionPDO.inc.php");

class adminRechercheProduit {

    private static $instance = null;
    private $id;

    private function __construct($base, $param) {
        $this->id = connexionPDO($base,$param);
        if (!$this->id) {
            throw new Exception("Connexion Impossible à la base de données : ".HOST);
        }
    }

    //retourne une instance de la classe
    public static function getInstance($base, $param) {
        if(is_null(self::$instance)) {
            self::$instance = new adminRechercheProduit($base, $param);
        }
        return self::$instance;
    }

	function __destruct ()
	{
		
	}
	
		
	public function rechercheProduit()
	{

        $value=$_POST['champRecherche'];
        $champ=$_POST['rechercherPar'];
        $requete = "SELECT Produit_ID, Produit_Nom, Produit_Code, produit_style, produit_materiel, Produit_OS FROM produit WHERE $champ LIKE '%$value%'";

        $result  = $this->id->query($requete);

        $tabresult = $result->fetchAll(PDO::FETCH_ASSOC);
        return $tabresult;
    }
}




?>