<?php
include_once("./includes/connexionPDO.inc.php");

class insertClient {

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
            self::$instance = new insertClient($base, $param);
        }
        return self::$instance;
    }

	function __destruct ()
	{
		
	}
	
		
	public function insertClient()
	{
        $clientNom=$_POST['nom'];
        $clientPrenom=$_POST['prenom'];
        $clientAdresse=$_POST['adresse'];
        $clientVille=$_POST['ville'];
        $clientCodepostal=$_POST['codepostal'];
        $clientPays=$_POST['pays'];
        $clientTelephone=$_POST['telephone'];
        $clientEmail=$_POST['email'];
        $clientNomUtilisateur=$_POST['nomUtilisateur'];
        $clientMdp=$_POST['mdp'];

        $insert1 = "INSERT INTO client (Client_Nom,Client_Prenom,Client_Adresse,Client_Ville,Client_Codepostal,Client_Pays,Client_Tel,Client_Email,Client_NomUtilisateur,Client_Mdp)
        VALUES ('$clientNom','$clientPrenom','$clientAdresse','$clientVille','$clientCodepostal','$clientPays','$clientTelephone','$clientEmail','$clientNomUtilisateur','$clientMdp')";

        $result1  = $this->id->query($insert1);
return $result1;

    }
}




?>