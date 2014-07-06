<?php
include_once("./includes/connexionPDO.inc.php");

class insertProduit {

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
            self::$instance = new insertProduit($base, $param);
        }
        return self::$instance;
    }

	function __destruct ()
	{
		
	}
	
		
	public function insertProduit()
	{
        $produitNom=$_POST['produitNom'];
        $produitCode=$_POST['produitCode'];
        $produitCouleur=$_POST['produitCouleur'];
        $produitDesc=$_POST['produitDesc'];
        $produitOS=$_POST['produitOS'];
        $produitWaterproof=$_POST['produitWaterproof'];
        $produitTactile=$_POST['produitTactile'];
        $produitResolution=$_POST['produitResolution'];
        $produitMicrophone=$_POST['produitMicrophone'];
        $produitCamera=$_POST['produitCamera'];
        $produitResolutionCamera=$_POST['produitResolutionCamera'];
        $produitHautparleur=$_POST['produitHautparleur'];
        $produitPoids=$_POST['produitPoids'];
        $produitLongeur=$_POST['produitLongeur'];
        $produitLargeur=$_POST['produitLargeur'];



        $insert1 = "INSERT INTO produit (Client_Nom,Client_Prenom,Client_Adresse,Client_Ville,Client_Codepostal,Client_Pays,Client_Tel,Client_Email,Client_NomUtilisateur,Client_Mdp)
        VALUES ('$clientNom','$clientPrenom','$clientAdresse','$clientVille','$clientCodepostal','$clientPays','$clientTelephone','$clientEmail','$clientNomUtilisateur','$clientMdp')";

        $result1  = $this->id->query($insert1);
return $result1;

    }
}




?>