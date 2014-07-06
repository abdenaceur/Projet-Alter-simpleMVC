<?php
include_once("./includes/connexionPDO.inc.php");

class modeleEffacerProduit {

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
            self::$instance = new modeleEffacerProduit($base, $param);
        }
        return self::$instance;
    }

	function __destruct ()
	{
		
	}
	
		
	public function effacerProduit()
	{

        $insert1 = "DELETE FROM produit WHERE Produit_ID='".$_GET['produitid']."'";

        $result1  = $this->id->query($insert1);
        return $result1;

    }
}




?>