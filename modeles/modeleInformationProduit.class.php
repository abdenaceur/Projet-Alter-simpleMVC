<?php
include_once("./includes/connexionPDO.inc.php");

class modeleInformationProduit {

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
            self::$instance = new modeleInformationProduit($base, $param);
        }
        return self::$instance;
    }

	function __destruct ()
	{
		
	}
	
		
	public function getInformationProduit()
	{
        $numProduit = $_GET['produitid'];
        $requete = "SELECT * FROM produit WHERE Produit_ID = '$numProduit'";

        $result1  = $this->id->query($requete);
        $tabresult = $result1->fetchAll(PDO::FETCH_ASSOC);

        return $tabresult;

    }

    public function setInformationProduit()
    {

        $produitNom=$_POST['nom_produit'];
        $produitCode=$_POST['code_produit'];
        $produitPrix=$_POST['prix_produit'];
        $produitstyle=$_POST['style_produit'];
        $produitMateriel=$_POST['materiel_produit'];
        $produitOS=$_POST['os_produit'];
        $produitCouleur=$_POST['coleur'];
        $produitLongeur=$_POST['longeur_produit'];
        $produitResolutionCamera=$_POST['resolution_camera_produit'];
        $produitPoids=$_POST['poids_produit'];
        $produitLargeur=$_POST['largeur_produit'];
        $produitResolutionEcran=$_POST['resolution_ecran_produit'];
        $produitDescription=$_POST['description_produit'];
        $produitId=$_POST['produitid'];

        if(isset($_POST['WaterProof'])){
            $produitWaterproof=$_POST['WaterProof'];
            if($produitWaterproof=="WaterProof"){
                $produitWaterproof=1;
            }

        }else{
            $produitWaterproof=0;
        }
        if(isset($_POST['Hautparleur'])){
            $produitHautparleur=$_POST['Hautparleur'];
            if($produitHautparleur=="Hautpaleur"){
                $produitHautparleur=1;
            }

        }else{
            $produitHautparleur=0;
        }



        if(isset($_POST['TouchScreen'])){
            $produitTouchScreen=$_POST['TouchScreen'];
            if($produitTouchScreen=="TouchScreen"){
                $produitTouchScreen=1;
            }

        }else{
            $produitTouchScreen=0;
        }
        if(isset($_POST['Microphone'])){
            $produitMicrophone=$_POST['Microphone'];
            if($produitMicrophone=="Microphone"){
                $produitMicrophone=1;
            }
        }else{
            $produitMicrophone=0;
        }
        if(isset($_POST['Camera'])){
            $produitCamera=$_POST['Camera'];


            if($produitCamera=="Camera"){
                $produitCamera=1;
            }
        }else{
            $produitCamera=0;
        }


        $insert1 = "UPDATE produit SET Produit_Nom='$produitNom',Produit_Code='$produitCode',produit_style='$produitstyle',produit_materiel='$produitMateriel',Produit_Couleur='$produitCouleur',Produit_Description='$produitDescription',Produit_OS='$produitOS',Produit_WaterProof='$produitWaterproof',Produit_TouchScreen='$produitTouchScreen',Produit_ResolutionEcran='$produitResolutionEcran',Produit_Microphone='$produitMicrophone',Produit_Camera='$produitCamera',Produit_CameraResolution='$produitResolutionCamera',Produit_Hautparleur='$produitHautparleur',Produit_Poids='$produitPoids',Produit_Prix='$produitPrix',Produit_Longeur='$produitLongeur',Produit_Largeur='$produitLargeur' WHERE Produit_ID='$produitId'";

        $result1  = $this->id->query($insert1);
        return $result1;













        $insert1 = "UPDATE produit SET Client_Nom='$clientNom',Client_Prenom='$clientPrenom',Client_Adresse='$clientAdresse',Client_Ville='$clientVille',Client_Codepostal='$clientCodepostal',Client_Pays='$clientPays',Client_Tel='$clientTelephone',Client_Email='$clientEmail',Client_NomUtilisateur='$clientNomUtilisateur' WHERE Client_ID='$clientId'";


        $result1  = $this->id->query($insert1);

        return $result1;


    }

}




?>