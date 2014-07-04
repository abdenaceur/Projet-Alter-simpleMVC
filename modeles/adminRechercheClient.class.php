<?php
include_once("./includes/connexionPDO.inc.php");

class adminRechercheClient {

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
            self::$instance = new adminRechercheClient($base, $param);
        }
        return self::$instance;
    }

	function __destruct ()
	{
		
	}
	
		
	public function rechercheClient()
	{

        $value=$_POST['champRecherche'];
        $champ=$_POST['rechercherPar'];
        $requete = "SELECT Client_ID, Client_Nom, Client_Prenom, Client_Email, Client_Ville, Client_Pays FROM client WHERE $champ LIKE '%$value%'";

        $result  = $this->id->query($requete);

        $tabresult = $result->fetchAll(PDO::FETCH_ASSOC);
        return $tabresult;
    }
}




?>