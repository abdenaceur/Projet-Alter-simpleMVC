<?php
include_once("./includes/connexionPDO.inc.php");

class modeleAjoutRetirePanier {

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
            self::$instance = new modeleAjoutRetirePanier($base, $param);
        }
        return self::$instance;
    }

	function __destruct ()
	{
		
	}
    function ajouterAuPanier($idProduit)
    {
        $idclient = $_SESSION['ClientID'];
        $insert1 = "INSERT INTO panier(PanierClient_ID,PanierProduit_ID) VALUES ('$idclient','$idProduit')";

        $result1  = $this->id->query($insert1);
        return $result1;
    }

    function getArrayProduitPanier()
    {
        $idclient = $_SESSION['ClientID'];

        $requete = "SELECT PanierProduit_ID FROM panier WHERE PanierClient_ID = '$idclient'";

        $result1  = $this->id->query($requete);
        $tabresult = $result1->fetchAll(PDO::FETCH_ASSOC);

        return $tabresult;

    }



	public function getNumItemPanier($idclient)
	{

        $requete = "SELECT * FROM panier WHERE PanierClient_ID = '$idclient'";

        $result1  = $this->id->query($requete)->rowCount();


        //$result1 = $result1->rowCount();
        return $result1;

    }
    function retirerAuPanier($idProduit)
    {
        $idclient = $_SESSION['ClientID'];

        $insert1 = "DELETE FROM panier WHERE PanierProduit_ID='$idProduit' AND PanierClient_ID='$idclient'";

        $result1  = $this->id->query($insert1);
        return $result1;

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