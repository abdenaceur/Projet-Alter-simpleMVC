<?php
include_once("./includes/connexionPDO.inc.php");

class modeleInformationClient {

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
            self::$instance = new modeleInformationClient($base, $param);
        }
        return self::$instance;
    }

	function __destruct ()
	{
		
	}
	
		
	public function getInformationClient()
	{
        $numClient = $_GET['clientid'];
        $requete = "SELECT Client_ID,Client_Nom, Client_Prenom, Client_Adresse, Client_Ville, Client_Codepostal, Client_Pays, Client_Tel, Client_Email FROM client WHERE Client_ID = '$numClient'";

        $result1  = $this->id->query($requete);
        $tabresult = $result1->fetchAll(PDO::FETCH_ASSOC);

        return $tabresult;

    }

    public function setInformationClient()
    {
        $clientNom=$_POST['nom'];
        $clientPrenom=$_POST['prenom'];
        $clientAdresse=$_POST['adresse'];
        $clientVille=$_POST['ville'];
        $clientCodepostal=$_POST['codepostal'];
        $clientPays=$_POST['pays'];
        $clientTelephone=$_POST['telephone'];
        $clientEmail=$_POST['email'];

        $clientId=$_POST['clientid'];
        $insert1 = "UPDATE client SET Client_Nom='$clientNom',Client_Prenom='$clientPrenom',Client_Adresse='$clientAdresse',Client_Ville='$clientVille',Client_Codepostal='$clientCodepostal',Client_Pays='$clientPays',Client_Tel='$clientTelephone',Client_Email='$clientEmail'WHERE Client_ID='$clientId'";


        $result1  = $this->id->query($insert1);

        return $result1;


    }

}




?>