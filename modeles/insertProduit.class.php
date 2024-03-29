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














        $insert1 = "INSERT INTO produit (Produit_Nom,Produit_Code,produit_style,produit_materiel,Produit_Couleur,Produit_Description,Produit_OS,Produit_WaterProof,Produit_TouchScreen,Produit_ResolutionEcran,Produit_Microphone,Produit_Camera,Produit_CameraResolution,Produit_Hautparleur,Produit_Poids,Produit_Prix,Produit_Longeur,Produit_Largeur)
                                 VALUES ('$produitNom','$produitCode','$produitstyle','$produitMateriel','$produitCouleur','$produitDescription','$produitOS','$produitWaterproof','$produitTouchScreen','$produitResolutionEcran','$produitMicrophone','$produitCamera','$produitResolutionCamera','$produitHautparleur','$produitPoids','$produitPrix','$produitLongeur','$produitLargeur')";

        $result1  = $this->id->query($insert1);
        return $result1;

    }
}




?>